<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ArticleCreateForm extends Component
{
    public $article;
    public $title;
    public $description;
    public $price;
    public $category;

    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'price' => 'required',
        'category' => 'required',
    ];
    protected $messages = [
        'required' => 'Il campo :attribute è obbligatorio!'
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function store()
    {
        $this->validate();
        $category = Category::find($this->category);
        $category->articles()->create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'user_id' => Auth::user()->id,
        ]);

        $this->cleanForm();
        return session()->flash('articleCreated', 'Articolo creato');
    }
    public function cleanForm()
    {
        $this->title = "";
        $this->description = "";
        $this->price = "";
        $this->category = "";
    }
    public function render()
    {
        return view('livewire.article-create-form');
    }
}
