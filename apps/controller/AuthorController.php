<?php
class AuthorController extends Controller
{   public function __construct()
    {
        parent:: __construct();
        $this->model('author');

    }   
    public function index()
    {   
        $allauthors= $this->author->showAll(); 
        $this->load->view('author.index',['data'=>$allauthors]);
    }
    public function create(){
        // echo "This is create of ProductController ";
        $this->load->view('product.create',[]);

    }
        public function store(){
            $data=[
                'username' => 'Vimal',
                'password' => md5('vimalpanmasala'),
                'fullname'   => 'Vimal kumar masala'
            ];
            $this->author->save($data);
        }
    
    public function edit($id){
        echo "This is edit of ProductController $id ";
    }
    
    public function update(){
        echo "This is update of ProductController ";
    }

    public function show(){
        echo "This is show of ProductController ";
    }
    public function destroy(){
        echo "This is destroy of ProductController ";
    }
}
