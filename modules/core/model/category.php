<?php
namespace core\model;
/**
* Description of entity category
* @author Parsimony
* @top 217px
* @left 1091px
*/
class category extends \entity {

    protected $id_category;






public function __construct(\field_ident $id_category,\field_string $name,\field_foreignkey $id_parent,\field_url_rewriting $url,\field_wysiwyg $description) {
        $this->id_category = $id_category;
        $this->name = $name;
        $this->id_parent = $id_parent;
        $this->url = $url;
        $this->description = $description;

}
// DON'T TOUCH THE CODE ABOVE ##########################################################

}
?>