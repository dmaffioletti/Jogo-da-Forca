<?php header("Content-Type: text/html; charset=utf-8",true);

class Forca {

  private $tagCurrent;
  private $life = 5;

  public function __construct(){
    $this->setTagCurrent('bmw');
  }

  public function registryPositions( array $positions ){
    return true;
  }
  
  public function gameOver(){
    return "Você perdeu! a palavra é " . $this->getTagCurrent();
  }

  public function getTagCurrent(){
    return $this->tagCurrent;
  }
  
  public function setTagCurrent( $tag ){
    $this->tagCurrent = $tag;
  }

  public function getLife(){
    return $this->life;
  }

  public function removeLife(){
    $this->life--;
    return $this;
  }

  public function getTagNumLetter(){
    return strlen( $this->getTagCurrent() );
  }

  public function tagSearchLetter( $letter ){
    if( $this->life >= 0 ){
      $tag = $this->getTagCurrent();
      for( $i=0; $i < strlen( $tag ); $i++ ){
        $arrLetter[] = $tag[ $i ];
      }
      $searchPositions = array_keys( $arrLetter , $letter );
      if( ! empty( $searchPositions ) ){
        $this->registryPositions( $searchPositions );
        return true;
      } else {
        $this->removeLife();
        return true;
      }
    } else {
      $this->gameOver();
    }
  }

  public function x( $coisa ){
    print '<pre>';
    print_r( $coisa );
    die;
  }
}
