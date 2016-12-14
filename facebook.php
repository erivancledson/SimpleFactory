 <?php
        
 
 class Facebook{
     
    public function createPost(){
        return new Post();
    }
    
   
     
 }
 
  class Post{
    private $autor;
    private $mensagem;
    
    public function getAutor() {
        return $this->autor;
    }

    public function getMensagem() {
        return $this->mensagem;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }

        
    }
 
 ?>

