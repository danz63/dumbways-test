<?php
class Home extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data = [
            'books' => $this->db->query("SELECT a.id, a.name, c.name as 'penulis', b.name as 'kategori',a.publication_year, a.img FROM 
            book_tb a JOIN category_tb b ON a.category_id=b.id
            JOIN writer_tb c ON a.writer_id=c.id", 'get'),
            'title' => 'Dumb Books'
        ];
        view('home/index', $data);
    }
}
