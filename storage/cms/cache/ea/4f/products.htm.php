<?php 
use RainLab\Blog\Models\Category;use RainLab\Blog\Models\Post;class Cms5ae80fa904d44004141414_779dc83b16a3831d8435f49f5d77565bClass extends \Cms\Classes\PageCode
{


public function onStart(){
    $slug = $this->param('slug');
    if(!$slug){
        return redirect('product/road');    
    }
    //$tree = Category::where('slug','products')->get();
    $categories = Category::getNested();
    $allChildren = $categories->where('slug','products')->first();
    $this['children'] = $allChildren->children;
    $this['slug'] = $slug;
    $currentCategory = Category::where('slug',$slug)->first();
    $this['productList'] = $currentCategory->posts_noscope;
    $this['category'] = $currentCategory;
}
public function onGetArticle(){
    $id = input('id');
    if(!$id){
        throw new ApplicationException('Invalid value');
    }
    
    $post = Post::findOrFail($id);
    
    $this['data'] = ['title'=>$post->title,'summary'=>$post->summary,'content'=>$post->content,'thumb'=>$post->featured_images];
}
}
