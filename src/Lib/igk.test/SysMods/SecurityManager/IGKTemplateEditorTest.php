<?php
namespace IGK\Test\SysMods\SecurityManager;
use PHPUnit\Framework\TestCase;
require_once(IGK_LIB_DIR."/SysMods/TemplateEditor/IGKTemplateEditor.php");
class IGKTemplateEditorTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKTemplateEditor::class));
	}
}