<?php



///<summary>represent IIAction Result interface </summary>
/**
* represent IIAction Result interface
*/
interface IIGKActionResult{
    ///<summary>Represente index function</summary>
    /**
    * Represente index function
    */
    function index();
}




///<summary>Represente interface: IIGKConfigController</summary>
/**
* Represente IIGKConfigController interface
*/
interface IIGKConfigController {
    ///<summary>Represente showConfig function</summary>
    /**
    * Represente showConfig function
    */
    function showConfig();
}
///<summary>Represente interface: IIGKController</summary>
/**
* Represente IIGKController interface
*/
interface IIGKController{
    ///<summary>Represente getName function</summary>
    /**
    * Represente getName function
    */
    function getName();
    ///<summary>Represente getTargetNode function</summary>
    /**
    * Represente getTargetNode function
    */
    function getTargetNode();
    ///<summary>Represente getTargetNodeId function</summary>
    /**
    * Represente getTargetNodeId function
    */
    function getTargetNodeId();
    ///<summary>Represente initMenu function</summary>
    /**
    * Represente initMenu function
    */
    function initMenu();
    ///<summary>Represente View function</summary>
    /**
    * Represente View function
    */
    function View();
}
///<summary>Represente interface: IIGKControllerInitListener</summary>
/**
* Represente IIGKControllerInitListener interface
*/
interface IIGKControllerInitListener{
    ///<summary>Represente addDir function</summary>
    ///<param name="name"></param>
    /**
    * Represente addDir function
    * @param mixed $name
    */
    function addDir($name);
    ///<summary>Represente addSource function</summary>
    ///<param name="name"></param>
    ///<param name="source"></param>
    /**
    * Represente addSource function
    * @param mixed $name
    * @param mixed $source
    */
    function addSource($name, $source);
}
///<summary>Represente interface: IIGKCssCtrlHost</summary>
/**
* Represente IIGKCssCtrlHost interface
*/
interface IIGKCssCtrlHost{
    ///<summary>Represente bindCss function</summary>
    /**
    * Represente bindCss function
    */
    function bindCss();
    ///<summary>Represente getIsCssActive function</summary>
    ///<param name="doc" default="null"></param>
    /**
    * Represente getIsCssActive function
    * @param mixed $doc the default value is null
    */
    function getIsCssActive($doc=null);
}
///<summary>Represente interface: IIGKCtrlDirManagement</summary>
/**
* Represente IIGKCtrlDirManagement interface
*/
interface IIGKCtrlDirManagement{
    ///<summary>Represente getDataDir function</summary>
    /**
    * Represente getDataDir function
    */
    function getDataDir();
    ///<summary>Represente getDeclaredDir function</summary>
    /**
    * Represente getDeclaredDir function
    */
    function getDeclaredDir();
    ///<summary>Represente getName function</summary>
    /**
    * Represente getName function
    */
    function getName();
    ///<summary>Represente getResourcesDir function</summary>
    /**
    * Represente getResourcesDir function
    */
    function getResourcesDir();
    ///<summary>Represente getStylesDir function</summary>
    /**
    * Represente getStylesDir function
    */
    function getStylesDir();
    ///<summary>Represente getViewDir function</summary>
    /**
    * Represente getViewDir function
    */
    function getViewDir();
}
///<summary>Represente interface: IIGKDataAdapter</summary>
/**
* Represente IIGKDataAdapter interface
*/
interface IIGKDataAdapter{
    ///<summary>Represente countAndWhere function</summary>
    /**
    * Represente countAndWhere function
    */
    function countAndWhere();
    ///<summary>Represente createDb function</summary>
    /**
    * Represente createDb function
    */
    function createDb();
    ///<summary>Represente setForeignKeyCheck function</summary>
    /**
    * Represente setForeignKeyCheck function
    */
    function setForeignKeyCheck();
}
///<summary>Represente interface: IIGKDataTable</summary>
/**
* Represente IIGKDataTable interface
*/
interface IIGKDataTable{}
///<summary>Represente interface: IIGKDbUtility</summary>
/**
* Represente IIGKDbUtility interface
*/
interface IIGKDbUtility{
    ///<summary>Represente insertIfNotExists function</summary>
    ///<param name="table"></param>
    ///<param name="obj"></param>
    ///<param name="leaveopen" default="false"></param>
    /**
    * Represente insertIfNotExists function
    * @param mixed $table
    * @param mixed $obj
    * @param mixed $leaveopen the default value is false
    */
    function insertIfNotExists($table, $obj, $leaveopen=false);
}
interface IIGKDbModel{
	function getTable();
}

///<summary>engine form builder interface</summary>
///<note>all id are mixed of string or array properties</summary>
/**
* engine form builder interface
*/
interface IIGKFormBuilderEngine{
    ///<summary>Represente addButton function</summary>
    ///<param name="id"></param>
    ///<param name="type" default="'submit'"></param>
    ///<param name="text" default="null"></param>
    /**
    * Represente addButton function
    * @param mixed $id
    * @param mixed $type the default value is 'submit'
    * @param mixed $text the default value is null
    */
    function addButton($id, $type='submit', $text=null);
    ///<summary>Represente addCheckbox function</summary>
    ///<param name="id"></param>
    ///<param name="value" default="null"></param>
    ///<param name="attribs" default="null"></param>
    /**
    * Represente addCheckbox function
    * @param mixed $id
    * @param mixed $value the default value is null
    * @param mixed $attribs the default value is null
    */
    function addCheckbox($id, $value=null, $attribs=null);
    ///<summary>Represente addControl function</summary>
    ///<param name="id"></param>
    ///<param name="type" default="'text'"></param>
    ///<param name="style" default="null"></param>
    /**
    * Represente addControl function
    * @param mixed $id
    * @param mixed $type the default value is 'text'
    * @param mixed $style the default value is null
    */
    function addControl($id, $type='text', $style=null);
    ///<summary>Represente addGroup function</summary>
    /**
    * Represente addGroup function
    */
    function addGroup();
    ///<summary>Represente addLabel function</summary>
    ///<param name="id"></param>
    ///<param name="class" default="null"></param>
    /**
    * Represente addLabel function
    * @param mixed $id
    * @param mixed $class the default value is null
    */
    function addLabel($id, $class=null);
    ///<summary>Represente addLabelControl function</summary>
    ///<param name="id"></param>
    ///<param name="value" default="null"></param>
    ///<param name="type" default="'text'"></param>
    ///<param name="style" default="null"></param>
    /**
    * Represente addLabelControl function
    * @param mixed $id
    * @param mixed $value the default value is null
    * @param mixed $type the default value is 'text'
    * @param mixed $style the default value is null
    */
    function addLabelControl($id, $value=null, $type='text', $style=null);
    ///<summary>Represente addLabelSelect function</summary>
    ///<param name="id"></param>
    ///<param name="entries"></param>
    ///<param name="filter" default="null"></param>
    /**
    * Represente addLabelSelect function
    * @param mixed $id
    * @param mixed $entries
    * @param mixed $filter the default value is null
    */
    function addLabelSelect($id, $entries, $filter=null);
    ///<summary>Represente addLabelTextarea function</summary>
    ///<param name="id"></param>
    ///<param name="value" default="null"></param>
    /**
    * Represente addLabelTextarea function
    * @param mixed $id
    * @param mixed $value the default value is null
    */
    function addLabelTextarea($id, $value=null);
    ///<summary>Represente addRadioButton function</summary>
    ///<param name="id"></param>
    ///<param name="value" default="null"></param>
    ///<param name="attribs" default="null"></param>
    /**
    * Represente addRadioButton function
    * @param mixed $id
    * @param mixed $value the default value is null
    * @param mixed $attribs the default value is null
    */
    function addRadioButton($id, $value=null, $attribs=null);
    ///<summary>Represente addTextarea function</summary>
    ///<param name="id"></param>
    ///<param name="value" default="null"></param>
    /**
    * Represente addTextarea function
    * @param mixed $id
    * @param mixed $value the default value is null
    */
    function addTextarea($id, $value=null);
    ///<summary>Represente addTextfield function</summary>
    ///<param name="id"></param>
    ///<param name="value" default="null"></param>
    ///<param name="attribs" default="null"></param>
    /**
    * Represente addTextfield function
    * @param mixed $id
    * @param mixed $value the default value is null
    * @param mixed $attribs the default value is null
    */
    function addTextfield($id, $value=null, $attribs=null);
    ///<summary>Represente getView function</summary>
    /**
    * Represente getView function
    */
    function getView();
    ///<summary>Represente setView function</summary>
    ///<param name="host"></param>
    /**
    * Represente setView function
    * @param mixed $host
    */
    function setView($host);
}
///<summary>Represente interface: IIGKFrameController</summary>
/**
* Represente IIGKFrameController interface
*/
interface IIGKFrameController{
    ///<summary>Represente ContainFrame function</summary>
    ///<param name="id"></param>
    ///<param name="frame"></param>
    ///<param name="remove" default="true"></param>
    /**
    * Represente ContainFrame function
    * @param mixed $id
    * @param mixed $frame
    * @param mixed $remove the default value is true
    */
    function ContainFrame($id, $frame, $remove=true);
}
///<summary>Represente interface: IIGKHtmlComponent</summary>
/**
* Represente IIGKHtmlComponent interface
*/
interface IIGKHtmlComponent{
    ///<summary>Represente getComponentId function</summary>
    /**
    * Represente getComponentId function
    */
    function getComponentId();
    ///<summary>Represente getComponentUri function</summary>
    ///<param name="uri"></param>
    /**
    * Represente getComponentUri function
    * @param mixed $uri
    */
    function getComponentUri($uri);
    ///<summary>Represente getController function</summary>
    /**
    * Represente getController function
    */
    function getController();
    ///<summary>Represente setComponentListener function</summary>
    ///<param name="listener"></param>
    ///<param name="param" default="null"></param>
    /**
    * Represente setComponentListener function
    * @param mixed $listener
    * @param mixed $param the default value is null
    */
    function setComponentListener($listener, $param=null);
}
///<summary>use to indicate that an element can store a cookie to client size</summary>
/**
* use to indicate that an element can store a cookie to client size
*/
interface IIGKHtmlCookieItem{
    ///<summary>Represente getCookieId function</summary>
    /**
    * Represente getCookieId function
    */
    function getCookieId();
    ///<summary>Represente setCookieId function</summary>
    ///<param name="v"></param>
    /**
    * Represente setCookieId function
    * @param mixed $v
    */
    function setCookieId($v);
}
///<summary>Represente interface: IIGKHtmlGetValue</summary>
/**
* Represente IIGKHtmlGetValue interface
*/
interface IIGKHtmlGetValue {
    ///<summary>Represente getValue function</summary>
    ///<param name="options" default="null"></param>
    /**
    * Represente getValue function
    * @param mixed $options the default value is null
    */
    function getValue($options=null);
}
///<summary>Represente interface: IIGKHtmlLoadContent</summary>
/**
* Represente IIGKHtmlLoadContent interface
*/
interface IIGKHtmlLoadContent {
    ///<summary>Represente LoadExpression function</summary>
    ///<param name="data"></param>
    ///<param name="context" default="null"></param>
    /**
    * Represente LoadExpression function
    * @param mixed $data
    * @param mixed $context the default value is null
    */
    function LoadExpression($data, $context=null);
    ///<summary>Represente LoadFile function</summary>
    ///<param name="file"></param>
    /**
    * Represente LoadFile function
    * @param mixed $file
    */
    function LoadFile($file);
    ///<summary>Represente LoadView function</summary>
    ///<param name="ctr"></param>
    ///<param name="article"></param>
    /**
    * Represente LoadView function
    * @param mixed $ctr
    * @param mixed $article
    */
    function LoadView($ctr, $article);
}
///<summary>Represente interface: IIGKHtmlUriItem</summary>
/**
* Represente IIGKHtmlUriItem interface
*/
interface IIGKHtmlUriItem{
    ///<summary>Represente getUri function</summary>
    /**
    * Represente getUri function
    */
    function getUri();
    ///<summary>Represente setUri function</summary>
    ///<param name="v"></param>
    /**
    * Represente setUri function
    * @param mixed $v
    */
    function setUri($v);
}
interface IIGKListener{
    function register($name, $callback);
}
///<summary>Represente interface: IIGKMailAttachmentContainer</summary>
/**
* Represente IIGKMailAttachmentContainer interface
*/
interface IIGKMailAttachmentContainer{
    ///<summary>Represente attachContent function</summary>
    ///<param name="content"></param>
    ///<param name="type" default="IGK_CT_PLAIN_TEXT"></param>
    ///<param name="cid" default="null"></param>
    /**
    * Represente attachContent function
    * @param mixed $content
    * @param mixed $type the default value is IGK_CT_PLAIN_TEXT
    * @param mixed $cid the default value is null
    */
    function attachContent($content, $type=IGK_CT_PLAIN_TEXT, $cid=null);
    ///<summary>Represente attachFile function</summary>
    ///<param name="file"></param>
    ///<param name="type" default="IGK_CT_PLAIN_TEXT"></param>
    ///<param name="cid" default="null"></param>
    /**
    * Represente attachFile function
    * @param mixed $file
    * @param mixed $type the default value is IGK_CT_PLAIN_TEXT
    * @param mixed $cid the default value is null
    */
    function attachFile($file, $type=IGK_CT_PLAIN_TEXT, $cid=null);
}
///<summary>notification message</summary>
/**
* notification message
*/
interface IIGKNotifyMessage {
    ///<summary>Represente addError function</summary>
    ///<param name="message"></param>
    /**
    * Represente addError function
    * @param mixed $message
    */
    function addError($message);
    ///<summary>Represente addErrorr function</summary>
    ///<param name="keymessage"></param>
    /**
    * Represente addErrorr function
    * @param mixed $keymessage
    */
    function addErrorr($keymessage);
    ///<summary>Represente addInfo function</summary>
    ///<param name="message"></param>
    /**
    * Represente addInfo function
    * @param mixed $message
    */
    function addInfo($message);
    ///<summary>Represente addInfor function</summary>
    ///<param name="keymessage"></param>
    /**
    * Represente addInfor function
    * @param mixed $keymessage
    */
    function addInfor($keymessage);
    ///<summary>Represente addMsg function</summary>
    ///<param name="message"></param>
    /**
    * Represente addMsg function
    * @param mixed $message
    */
    function addMsg($message);
    ///<summary>Represente addMsgr function</summary>
    ///<param name="keymessage"></param>
    /**
    * Represente addMsgr function
    * @param mixed $keymessage
    */
    function addMsgr($keymessage);
    ///<summary>Represente addSuccess function</summary>
    ///<param name="message"></param>
    /**
    * Represente addSuccess function
    * @param mixed $message
    */
    function addSuccess($message);
    ///<summary>Represente addSuccessr function</summary>
    ///<param name="keymessage"></param>
    /**
    * Represente addSuccessr function
    * @param mixed $keymessage
    */
    function addSuccessr($keymessage);
    ///<summary>Represente addWarning function</summary>
    ///<param name="message"></param>
    /**
    * Represente addWarning function
    * @param mixed $message
    */
    function addWarning($message);
    ///<summary>Represente addWarningr function</summary>
    ///<param name="keymessage"></param>
    /**
    * Represente addWarningr function
    * @param mixed $keymessage
    */
    function addWarningr($keymessage);
}
///<summary>Represente interface: IIGKParamHostService</summary>
/**
* Represente IIGKParamHostService interface
*/
interface IIGKParamHostService{
    ///<summary>Represente getParam function</summary>
    ///<param name="name"></param>
    ///<param name="default" default="null"></param>
    /**
    * Represente getParam function
    * @param mixed $name
    * @param mixed $default the default value is null
    */
    function getParam($name, $default=null);
    ///<summary>Represente getParamKeys function</summary>
    /**
    * Represente getParamKeys function
    */
    function getParamKeys();
    ///<summary>Represente resetParam function</summary>
    /**
    * Represente resetParam function
    */
    function resetParam();
    ///<summary>Represente setParam function</summary>
    ///<param name="name"></param>
    ///<param name="value"></param>
    /**
    * Represente setParam function
    * @param mixed $name
    * @param mixed $value
    */
    function setParam($name, $value);
}
///<summary>Represente interface: IIGKParentDocumentHost</summary>
/**
* Represente IIGKParentDocumentHost interface
*/
interface IIGKParentDocumentHost{
    ///<summary>Represente BindScriptTo function</summary>
    ///<param name="document"></param>
    /**
    * Represente BindScriptTo function
    * @param mixed $document
    */
    function BindScriptTo($document);
    ///<summary>Represente getDoc function</summary>
    /**
    * Represente getDoc function
    */
    function getDoc();
}
///<summary> represent query result interface </summary>
/**
*  represent query result interface
*/
interface IIGKQueryResult{
    ///<summary>Represente getRowAtIndex function</summary>
    ///<param name="index"></param>
    /**
    * Represente getRowAtIndex function
    * @param mixed $index
    */
    function getRowAtIndex($index);
    ///<summary>Represente getRows function</summary>
    /**
    * Represente getRows function
    */
    function getRows();
}
///<summary>Represente interface: IIGKSystemUser</summary>
/**
* Represente IIGKSystemUser interface
*/
interface IIGKSystemUser {
    ///<summary>Represente getLogin function</summary>
    /**
    * Represente getLogin function
    */
    function getLogin();
}
///<summary>Represente interface: IIGKUriActionListener</summary>
/**
* Represente IIGKUriActionListener interface
*/
interface IIGKUriActionListener{
    ///<summary>Represente invokeUriPattern function</summary>
    ///<param name="e"></param>
    ///<param name="render" default="1"></param>
    /**
    * Represente invokeUriPattern function
    * @param mixed $e
    * @param mixed $render the default value is 1
    */
    function invokeUriPattern($e, $render=1);
    ///<summary>Represente matche function</summary>
    ///<param name="uri"></param>
    /**
    * Represente matche function
    * @param mixed $uri
    */
    function matche($uri);
}
///<summary>Represente interface: IIGKUriActionRegistrableController</summary>
/**
* Represente IIGKUriActionRegistrableController interface
*/
interface IIGKUriActionRegistrableController{
    ///<summary>Represente getBasicUriPattern function</summary>
    /**
    * Represente getBasicUriPattern function
    */
    function getBasicUriPattern();
    ///<summary>registrated invocation uri </summary>
    /**
    * registrated invocation uri
    */
    function getRegInvokeUri();
    ///<summary>Represente getRegUriAction function</summary>
    /**
    * Represente getRegUriAction function
    */
    function getRegUriAction();
}
///<summary>Represente interface: IIGKUserController</summary>
/**
* Represente IIGKUserController interface
*/
interface IIGKUserController{
    ///<summary>Represente connect function</summary>
    /**
    * Represente connect function
    */
    function connect();
    ///<summary>Represente signup function</summary>
    /**
    * Represente signup function
    */
    function signup();
}
///<summary>Represente interface: IIGKWebAdministrativeCtrl</summary>
/**
* Represente IIGKWebAdministrativeCtrl interface
*/
interface IIGKWebAdministrativeCtrl {
    ///<summary>Represente getConfigNode function</summary>
    /**
    * Represente getConfigNode function
    */
    function getConfigNode();
}
///<summary>Represente interface: IIGKWebPageChildCtrontroller</summary>
/**
* Represente IIGKWebPageChildCtrontroller interface
*/
interface IIGKWebPageChildCtrontroller{
    ///<summary>Represente getWebParentCtrl function</summary>
    /**
    * Represente getWebParentCtrl function
    */
    function getWebParentCtrl();
}
///<summary>db manager interface</summary>
/**
* db manager interface
*/
interface IIGKdbManager {
    ///<summary>Represente close function</summary>
    ///<param name="leaveopen" default="false"></param>
    /**
    * Represente close function
    * @param mixed $leaveopen the default value is false
    */
    function close($leaveopen=false);
    ///<summary>Represente connect function</summary>
    /**
    * Represente connect function
    */
    function connect();
    ///<summary>Represente dropTable function</summary>
    ///<param name="tableName"></param>
    /**
    * Represente dropTable function
    * @param mixed $tableName
    */
    function dropTable($tableName);
}
///<summary>represent a module listener interface</summary>
/**
* represent a module listener interface
*/
interface IIGKAppModuleListener extends IIGKConfigController{
    const DATA=1;
    const DATA2=self::DATA + 5;
    const DATA3=self::DATA2;
    ///<summary>Represente getBaseUri function</summary>
    /**
    * Represente getBaseUri function
    */
    function getBaseUri();
    ///<summary>Represente getConfigs function</summary>
    /**
    * Represente getConfigs function
    */
    function getConfigs();
    ///<summary>Represente getTable function</summary>
    ///<param name="n"></param>
    /**
    * Represente getTable function
    * @param mixed $n
    */
    function getTable($n);
}
///<summary>Represente interface: IIGKDataController</summary>
/**
* Represente IIGKDataController interface
*/
interface IIGKDataController extends IIGKController {
    ///<summary>Represente getDataAdapterName function</summary>
    /**
    * Represente getDataAdapterName function
    */
    function getDataAdapterName();
    ///<summary>return primary data table info or mixed array of table info</summary>
    /**
    * return primary data table info or mixed array of table info
    */
    function getDataTableInfo();
    ///<summary>Represente getDataTableName function</summary>
    /**
    * Represente getDataTableName function
    */
    function getDataTableName();
}
///<summary>Represente interface: IIGKWebController</summary>
/**
* Represente IIGKWebController interface
*/
interface IIGKWebController extends IIGKController {
    ///<summary>Represente getChilds function</summary>
    /**
    * Represente getChilds function
    */
    function getChilds();
    ///<summary>Represente regChildController function</summary>
    ///<param name="ctrl"></param>
    /**
    * Represente regChildController function
    * @param mixed $ctrl
    */
    function regChildController($ctrl);
    ///<summary>Represente unregChildController function</summary>
    ///<param name="ctrl"></param>
    /**
    * Represente unregChildController function
    * @param mixed $ctrl
    */
    function unregChildController($ctrl);
}
///<summary>Represente interface: IIGKQueryConditionalExpression</summary>
/**
* Represente IIGKQueryConditionalExpression interface
*/
interface IIGKQueryConditionalExpression extends IIGKHtmlGetValue {
    ///<summary>Represente add function</summary>
    ///<param name="expression"></param>
    ///<param name="operator" default="AND"></param>
    /**
    * Represente add function
    * @param mixed $expression
    * @param mixed $operator the default value is "AND"
    */
    function add($expression, $operator="AND");
    ///<summary>Represente getCount function</summary>
    /**
    * Represente getCount function
    */
    function getCount();
    ///<summary>Represente remove function</summary>
    ///<param name="expression"></param>
    /**
    * Represente remove function
    * @param mixed $expression
    */
    function remove($expression);
}
///<summary>Represente interface: IIGKWebPageController</summary>
/**
* Represente IIGKWebPageController interface
*/
interface IIGKWebPageController extends IIGKWebController {
    ///<summary>Represente loadWebTheme function</summary>
    ///<param name="file"></param>
    /**
    * Represente loadWebTheme function
    * @param mixed $file
    */
    function loadWebTheme($file);
    ///<summary>Represente manageErrorUriRequest function</summary>
    ///<param name="uri"></param>
    /**
    * Represente manageErrorUriRequest function
    * @param mixed $uri
    */
    function manageErrorUriRequest($uri);
}