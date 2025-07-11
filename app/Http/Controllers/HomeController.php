<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

use App\Models\Menu;
use App\Models\Category;
use App\Models\Post;
use App\Models\Section;
use App\Models\Images;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Customer;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use Mail;
use Image;
use File;

class HomeController extends Controller
{
    function __construct()
    {
        $setting = Setting::find('1');
        $menu = Menu::with('children')->where('parent', 0)->orderBy('view', 'asc')->get();
        $categorys = Category::orderBy('view', 'asc')->where('parent',0)->get();
        $RecentNews = Post::where('sort_by', 'News')->orderBy('id', 'desc')->take(5)->get();
        view()->share( [
            'setting'=>$setting,
            'menu'=>$menu,
            'categorys'=>$categorys,
            'RecentNews'=>$RecentNews,
        ]);
    }

    public function index()
    {
        $slider = Slider::orderBy('id', 'desc')->get();
        $product = Post::where('hot', 'true')->where('sort_by', 'Product')->orderBy('id', 'desc')->take(8)->get();
        $posts = Post::where('sort_by', 'News')->orderBy('id', 'desc')->take(5)->get();
        $brokers = Section::where('post_id', 730)->orderBy('id', 'desc')->take(5)->get();

        return view('pages.home', compact(
            'slider',
            'product',
            'posts',
            'brokers',
        ));
    }

    public function slugHandler($slug)
    {
        // Kiểm tra có phải category không
        $category = Category::where('slug', $slug)->first();
        if ($category) {
            return $this->category(request(), $slug);
        }

        // Kiểm tra có phải post không
        $post = Post::where('slug', $slug)->first();
        if ($post) {
            return $this->page(request(), $slug);
        }

        // Không có thì 404
        abort(404);
    }

    public function page(Request $request, $slug)
    {
        $data = Post::where('slug', $slug)->firstOrFail();
        if ($slug=='brokers') {
            return view('pages.brokers', compact('data'));
        }

        if ($slug=='premium-indicators') {
            return view('pages.premium-indicators', compact('data'));
        }
    }

    public function category(Request $request, $slug)
    {
        $data = Category::where('slug', $slug)->first();
        // cat_array
        $cat_array = [$data["id"]];
        $cates = Category::where('parent', $data["id"])->get();
        foreach ($cates as $key => $cate) {
            $cat_array[] = $cate->id;
        }
        // cat_array
        if ($slug == 'gioi-thieu') {
            return view('pages.about', compact(
                'data',
            ));
        }elseif($slug == 'lien-he'){
            return view('pages.contact', compact(
                'data',
            ));
        }else{
            if ($data->sort_by == 'Product') {
                $cats = Category::where('sort_by','Product')->where('parent','>',0)->get();
                $provinces = Province::get();

                $cat_array = $request->input('categories', $cat_array);
                $query = Post::query()->orderBy('id', 'DESC');
                if ($key = $request->get('key', '')) {
                    $query->where('name', 'like', '%' . $key . '%');
                }
                if (!empty($cat_array)) {
                    $query->whereIn('category_id', $cat_array);
                }
                $posts = $query->paginate($request->get('per_page', 12));

                return view('pages.category', compact(
                    'data',
                    'cats',
                    'provinces',
                    'posts',
                ));
            }
            if ($data->sort_by == 'News') {
                $posts = Post::whereIn('category_id', $cat_array)->orderBy('id', 'DESC')->paginate(30);
                return view('pages.news', compact(
                    'data',
                    'posts',
                ));
            }
        }
        
        
    }

    public function post($catslug, $slug)
    {
        $post = Post::where('slug', $slug)->first();
        $sections = Section::where('post_id', $post->id)->orderBy('stt', 'asc')->get();
        $related_post = Post::where('category_id', $post->category_id)->whereNotIn('id', [$post->id])->orderBy('id', 'desc')->take(10)->get();
        if ($post->sort_by == 'Product') {
            return view('pages.project', compact(
                'post',
                'sections',
                'related_post',
            ));
        }elseif ($post->sort_by == 'News') {
            return view('pages.post', compact(
                'post',
                'related_post',
            ));
        }
        
    }


    public function sitemap()
    {
        $category = Category::all();
        $Post = Post::all();
        return response()->view('sitemap', [
            'category' => $category,
            'Post' => $Post,
            ])->header('Content-Type', 'text/xml');
    }


    

   
}
