<?php //Implementation of View
      //any output representation of information

abstract class View{

  protected $_template;
  private $_top;
  private $_bottom;


  public function __construct($template){
    $this->_template = $template;
    $this->processTemplate($template, "<!--@{CONTENT}-->");
  }

  public abstract function show();

  public function showTop() {
      return $this->_top;
  }

  public function showBottom() {
      return $this->_bottom;
  }

  public abstract function getContent();

  public function createAttrs( $class = '', $id = null){
    $html = "";
    if( $class != null)
      $html .= " class=".$class." ";
    if( $id != null)
      $html .= " id=".$id." ";
      return $html;
  }

  public function createImg($class = '', $src = "/", $id = null){
    return "<img ".$this->createAttrs($class, $id )." src=".$src." />";
  }

  public function createDiv($class = '', $content, $id = null ){
    $html = "<div ".$this->createAttrs($class, $id )." >";
    $html .= $content;
    $html .= "</div>";
    return $html;
  }
  public function createSpan($class = '', $content, $id = null){
    return "<span ".$this->createAttrs($class, $id)." >".$content."</span>";
  }

  public function createParagraph($class = '', $content, $id = null){
    return "<p ".$this->createAttrs($class, $id)." >".$content."</p>";
  }

  public function createHeader($class = '', $content, $id = null,$headerType = 1 ){
    return "<h".strval($headerType)." ".$this->createAttrs($class, $id)." >".$content."</h".strval($headerType).">";
  }

  private function processTemplate2($template, $contentNotation){
    $file = fopen($this->_template,"r") or die("Error opening template ".$this->_template);
    $text = fread($file, filesize($this->_template));
    fclose($file);
    $exp = explode("<head>",$text,2);
    if( count($exp) < 2) die("No head!");
    $this->_head = $exp[0];
    $text = $exp[1];
    $exp = explode("</head>", $text, 2);
    if(count($exp) < 2) die("Invalid template: Incomplete head!");
    $this->_head = $exp[0];
    $text = $exp[1];
    $exp = explode($contentNotation, $text, 2);
    if(count($exp) < 2) die("Invalid template: Missing content tag!");
    $this->beforecontent = $exp[0];
    $this->aftercontent = $exp[1];
  }

  private function processTemplate($template, $contentNotation){
    $file = fopen($this->_template,"r") or die("Error opening template ".$this->_template);
    $text = fread($file, filesize($this->_template));
    fclose($file);
    $exp = explode($contentNotation, $text, 2);
    $this->_top = $exp[0];
    $this->_bottom = $exp[1];
  }

}




 ?>
