<?php header("Content-Type: text/html; charset=utf-8",true);

class Forca {

  private $tagCurrent;
  private $life = 5;

  public function __construct(){
    $this->setTagCurrent('abacaxi');
  }

  public function getLetters(){
    $tag = $this->getTagCurrent();
    for( $i=0; $i < strlen( $tag ); $i++ ){
      $arrLetter[] = $tag[ $i ];
    }
    return $arrLetter;
  }

  public function printLetter( $arrLetters , $letter ){
    for( $i=0; $i < count( $arrLetters ); $i++ ){
      if( $arrLetters[ $i ] == $letter ){
        $arrReturn[] = $letter;
      } else {
        $arrReturn[] = '_';
      }
    }
    return $arrReturn;
  }
  
  public function gameOver(){
    echo "Você perdeu! A palavra correta é <strong>" . $this->getTagCurrent() . "</strong>";
    die;
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
    if( ! $this->getLife() == 0 ){
      $arrLetter = array_values ( $this->getLetters() );
      if( ! empty( $arrLetter ) ){
        $this->printLetter( $arrLetter , $letter );
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
