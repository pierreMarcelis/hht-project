<?php
## +---------------------------------------------------------------------------+
## | 1. Creating & Calling:                                                    |
## +---------------------------------------------------------------------------+
##  *** define a relative (virtual) path to datagrid.class.php file
##  *** directory (relatively to the current file)
##  *** RELATIVE PATH ONLY ***
define ("DATAGRID_DIR", "./php_datagrid_428/");
require_once(DATAGRID_DIR."datagrid.class.php");

##  *** creating variables that we need for database connection
$DB_USER = "root";
$DB_PASS = "";
$DB_HOST = "localhost";
$DB_NAME = "hhtdocuments";

##  *** set needed options and create a new class instance
$debug_mode = false;        /* display SQL statements while processing */
$messaging = true;          /* display system messages on a screen */
$unique_prefix = "aio_";    /* prevent overlays - must be started with a letter */
$mode = isset($_REQUEST[$unique_prefix."mode"]) ? strip_tags($_REQUEST[$unique_prefix."mode"]) : "";
$rid = isset($_REQUEST[$unique_prefix."rid"]) ? (int)$_REQUEST[$unique_prefix."rid"] : "";

##  *** set data source with required settings
$sql = "SELECT
         users.id,
         users.email,
         users.firstName,
         users.lastName,
         users.hhtRole,
         hhtRole.password
       FROM HHT_USERS users";
$default_order = array("id"=>"ASC");   /* Ex.: array("field_1"=>"ASC", "field_2"=>"DESC") */
$dgrid->DataSource("PDO", "mysql", $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS, $sql, $default_order);
$dgrid->isDemo = true;

## +---------------------------------------------------------------------------+
## | 2. General Settings:                                                      |
## +---------------------------------------------------------------------------+
## +-- PostBack Submission Method ---------------------------------------------+
##  *** defines postback submission method for DataGrid: AJAX, POST(default) or GET
$postback_method = "post";
$dgrid->SetPostBackMethod($postback_method);
$dg_caption = "All In One Example";
$dgrid->SetCaption($dg_caption);
## +-- Multirow Operations ----------------------------------------------------+
##  *** allow multirow operations
$multirow_option = true;
$dgrid->AllowMultirowOperations($multirow_option);
$multirow_operations = array(
    "edit"    => array("view"=>true),
    "details" => array("view"=>true),
    "clone"   => array("view"=>false),
    "delete"  => array("view"=>true),
);
$dgrid->SetMultirowOperations($multirow_operations);

## +---------------------------------------------------------------------------+
## | 4. Sorting & Paging Settings:                                             |
## +---------------------------------------------------------------------------+
##  *** set paging option: true(default) or false
$paging_option = true;
$rows_numeration = false;
$numeration_sign = "N #";
$dropdown_paging = false;
$dgrid->AllowPaging($paging_option, $rows_numeration, $numeration_sign, $dropdown_paging);
##  *** set paging settings
$bottom_paging = array("results"=>true, "results_align"=>"left", "pages"=>true, "pages_align"=>"center", "page_size"=>true, "page_size_align"=>"right");
$top_paging = array();
$pages_array = array("10"=>"10", "12"=>"12", "25"=>"25", "50"=>"50", "100"=>"100", "250"=>"250", "500"=>"500", "1000"=>"1000");
$default_page_size = 12;
$paging_arrows = array("first"=>"|&lt;&lt;", "previous"=>"&lt;&lt;", "next"=>"&gt;&gt;", "last"=>"&gt;&gt;|");
$dgrid->SetPagingSettings($bottom_paging, $top_paging, $pages_array, $default_page_size, $paging_arrows);

## +---------------------------------------------------------------------------+
## | 5. Filter Settings:                                                       |
## +---------------------------------------------------------------------------+
##  *** set filtering option: true or false(default)
$filtering_option = true;
$show_search_type = true;
$dgrid->AllowFiltering($filtering_option, $show_search_type);
##  *** set additional filtering settings
$filtering_fields = array(
    "Textbox"     => array("type"=>"textbox",  "table"=>"demo_all_in_one", "table_alias"=>"oio", "field"=>"field_textbox", "filter_condition"=>"", "show_operator"=>"false", "default_operator"=>"=", "case_sensitive"=>"false", "comparison_type"=>"string", "width"=>"120px", "on_js_event"=>"", "default"=>""),
    "Date"        => array("type"=>"calendar", "table"=>"demo_all_in_one", "table_alias"=>"oio", "field"=>"field_date", "filter_condition"=>"", "show_operator"=>"false", "default_operator"=>"=", "case_sensitive"=>"false", "comparison_type"=>"string", "width"=>"120px", "on_js_event"=>"", "default"=>"", "calendar_type"=>"popup|floating", "date_format"=>"date", "field_type"=>""),
    "Foreign Key" => array("type"=>"enum",     "table"=>"demo_countries", "table_alias"=>"dc", "field"=>"id", "filter_condition"=>"", "show_operator"=>"false", "default_operator"=>"=", "case_sensitive"=>"false", "comparison_type"=>"string|numeric|binary", "width"=>"", "on_js_event"=>"", "default"=>"", "source"=>"self", "field_view"=>"name", "order_by_field"=>"name", "order_type"=>"ASC", "condition"=>"", "show_count"=>false, "multiple"=>"false", "multiple_size"=>"4"),
);
$dgrid->SetFieldsFiltering($filtering_fields);

## +---------------------------------------------------------------------------+
## | 6. View Mode Settings:                                                    |
## +---------------------------------------------------------------------------+
##  *** set columns in view mode
$fill_from_array = array("0"=>"No", "1"=>"Yes", "2"=>"Don't know", "3"=>"My be");
$vm_columns = array(
    "field_textbox"  => array("header"=>"Textbox",  "type"=>"label", "align"=>"left", "width"=>"", "wrap"=>"wrap", "text_length"=>"-1", "tooltip"=>"false", "tooltip_type"=>"simple", "case"=>"normal", "summarize"=>"false", "sort_type"=>"string", "sort_by"=>"", "visible"=>"true", "on_js_event"=>""),
    "field_date"     => array("header"=>"Date",     "type"=>"label", "align"=>"center", "width"=>"90px", "wrap"=>"wrap", "text_length"=>"-1", "tooltip"=>"false", "tooltip_type"=>"simple", "case"=>"normal", "summarize"=>"false", "sort_type"=>"string", "sort_by"=>"", "visible"=>"true", "on_js_event"=>""),
    "field_foreign_key_name" => array("header"=>"Foreign Key",  "type"=>"label", "align"=>"center", "width"=>"100px", "wrap"=>"wrap", "text_length"=>"-1", "tooltip"=>"false", "tooltip_type"=>"simple", "case"=>"normal", "summarize"=>"false", "sort_type"=>"string", "sort_by"=>"", "visible"=>"true", "on_js_event"=>""),
    "field_enum"     => array("header"=>"Enum",     "type"=>"enum",  "align"=>"center", "width"=>"90px", "wrap"=>"wrap|nowrap", "text_length"=>"-1", "tooltip"=>"false", "tooltip_type"=>"floating|simple", "case"=>"normal", "summarize"=>"false", "sort_type"=>"string", "sort_by"=>"", "visible"=>"true", "on_js_event"=>"", "source"=>$fill_from_array),
    "field_checkbox" => array("header"=>"Checkbox", "type"=>"checkbox", "align"=>"center", "width"=>"80px", "wrap"=>"wrap|nowrap", "sort_type"=>"numeric", "sort_by"=>"", "visible"=>"true", "on_js_event"=>"", "true_value"=>1, "false_value"=>0),
    "field_color"    => array("header"=>"Color",    "type"=>"color",    "align"=>"center", "width"=>"90px", "wrap"=>"wrap|nowrap", "text_length"=>"-1", "tooltip"=>"false", "tooltip_type"=>"floating|simple", "case"=>"normal", "sort_type"=>"string", "sort_by"=>"", "visible"=>"true", "on_js_event"=>"", "view_type"=>"image"),
    "field_money"    => array("header"=>"Money",    "type"=>"money", "align"=>"right", "width"=>"80px", "wrap"=>"wrap", "text_length"=>"-1", "tooltip"=>"false", "tooltip_type"=>"floating|simple", "case"=>"normal", "summarize"=>"true", "summarize_sign"=>"SUM$=", "sort_type"=>"numeric", "sort_by"=>"", "visible"=>"true", "on_js_event"=>"", "sign"=>"$", "sign_place"=>"before", "decimal_places"=>"2", "dec_separator"=>".", "thousands_separator"=>","),
    "field_percent"  => array("header"=>"Percent",  "type"=>"percent",  "align"=>"right", "width"=>"90px", "wrap"=>"wrap|nowrap", "text_length"=>"-1", "tooltip"=>"false", "tooltip_type"=>"floating|simple", "case"=>"normal", "summarize"=>"true", "summarize_sign"=>"AVG%=", "summarize_function"=>"AVG", "sort_type"=>"numeric", "sort_by"=>"", "visible"=>"true", "on_js_event"=>"", "decimal_places"=>"2", "dec_separator"=>"."),
);
$dgrid->SetColumnsInViewMode($vm_columns);

## +---------------------------------------------------------------------------+
## | 7. Add/Edit/Details Mode Settings:                                        |
## +---------------------------------------------------------------------------+
$table_name  = "demo_all_in_one";
$primary_key = "id";
$condition   = "";
$dgrid->SetTableEdit($table_name, $primary_key, $condition);
##  *** set columns in edit mode
$em_columns = array(
    "id"             => array("header"=>"Label (ID)", "type"=>"label",  "title"=>"", "default"=>"", "visible"=>"true", "on_js_event"=>""),
    "field_textbox"  => array("header"=>"Textbox",  "type"=>"textbox",  "req_type"=>"ry", "width"=>"210px", "title"=>"", "readonly"=>"false", "maxlength"=>"255", "default"=>"", "unique"=>"false", "unique_condition"=>"", "visible"=>"true", "on_js_event"=>""),
    "field_textarea" => array("header"=>"Textarea", "type"=>"textarea", "req_type"=>"sy", "width"=>"410px", "title"=>"", "readonly"=>"false", "maxlength"=>"1024", "default"=>"", "unique"=>"false", "unique_condition"=>"", "visible"=>"true", "on_js_event"=>"", "edit_type"=>"simple", "resizable"=>"true", "upload_images"=>"false", "rows"=>"3", "cols"=>"50"),
    "field_date"     => array("header"=>"Date",     "type"=>"date",     "req_type"=>"st", "width"=>"187px", "title"=>"", "readonly"=>"false", "maxlength"=>"-1", "default"=>"", "unique"=>"false", "unique_condition"=>"", "visible"=>"true", "on_js_event"=>"", "calendar_type"=>"dropdownlist"),
    "field_datetime" => array("header"=>"DateTime", "type"=>"datetime", "req_type"=>"st", "width"=>"127px", "title"=>"", "readonly"=>"false", "maxlength"=>"-1", "default"=>"", "unique"=>"false", "unique_condition"=>"", "visible"=>"true", "on_js_event"=>"", "calendar_type"=>"floating", "show_seconds"=>"true"),
    "field_time"     => array("header"=>"Time",     "type"=>"time",     "req_type"=>"st", "width"=>"90px",  "title"=>"", "readonly"=>"false", "maxlength"=>"-1", "default"=>"", "unique"=>"false", "unique_condition"=>"", "visible"=>"true", "on_js_event"=>"", "calendar_type"=>"dropdownlist", "show_seconds"=>"true"),
    "field_image"    => array("header"=>"Image",    "type"=>"image",    "req_type"=>"st", "width"=>"210px", "title"=>"", "readonly"=>"false", "maxlength"=>"-1", "default"=>"", "unique"=>"false", "unique_condition"=>"", "visible"=>"true", "on_js_event"=>"", "target_path"=>"uploads/", "allow_image_updating"=>"false", "max_file_size"=>"100K", "image_width"=>"120px", "image_height"=>"90px", "resize_image"=>"false", "resize_width"=>"", "resize_height"=>"", "magnify"=>"true", "magnify_type"=>"magnifier", "magnify_power"=>"2", "file_name"=>"", "host"=>"local", "allow_downloading"=>"false", "allowed_extensions"=>""),
    "field_file"     => array("header"=>"File",     "type"=>"file",     "req_type"=>"st", "width"=>"210px", "title"=>"", "readonly"=>"false", "maxlength"=>"-1", "default"=>"", "unique"=>"false", "unique_condition"=>"", "visible"=>"true", "on_js_event"=>"", "target_path"=>"uploads/", "max_file_size"=>"100K", "file_name"=>"", "host"=>"local", "allow_downloading"=>"false", "allowed_extensions"=>""),
    "field_money"    => array("header"=>"Money",    "type"=>"money",    "req_type"=>"sn", "width"=>"80px",  "title"=>"", "readonly"=>"false", "maxlength"=>"8",  "default"=>"0", "unique"=>"false", "unique_condition"=>"", "visible"=>"true", "on_js_event"=>"", "sign"=>"$", "sign_place"=>"before", "decimal_places"=>"2", "dec_separator"=>".", "thousands_separator"=>","),
    "delimiter_1"    => array("inner_html"=>"&#8226;&#8226;&#8226; Delimiter "),
    "field_foreign_key" =>array("header"=>"Foreign Key", "type"=>"foreign_key","req_type"=>"ri", "width"=>"210px", "title"=>"", "readonly"=>"false", "default"=>"", "unique"=>"false", "unique_condition"=>"", "visible"=>"true"),
    "field_enum"     => array("header"=>"Enum",     "type"=>"enum",     "req_type"=>"st", "width"=>"210px", "title"=>"", "readonly"=>"false", "maxlength"=>"-1", "default"=>"", "unique"=>"false", "unique_condition"=>"", "visible"=>"true", "on_js_event"=>"", "source"=>$fill_from_array, "view_type"=>"radiobutton", "elements_alignment"=>"horizontal|vertical", "multiple"=>"false", "multiple_size"=>"4"),
    "field_enum_multiple" => array("header"=>"Multiple Select", "type"=>"enum", "req_type"=>"sr", "width"=>"210px", "title"=>"", "readonly"=>"false", "maxlength"=>"-1", "default"=>"", "unique"=>"false", "unique_condition"=>"", "visible"=>"true", "on_js_event"=>"", "source"=>array("Vice"=>"Vice", "Current"=>"Current", "Candidate"=>"Candidate"), "view_type"=>"checkbox", "elements_alignment"=>"vertical", "multiple"=>"true", "multiple_size"=>"4"),
    "field_password" => array("header"=>"Password", "type"=>"password", "req_type"=>"sp", "width"=>"210px", "title"=>"", "readonly"=>"false", "maxlength"=>"20", "default"=>"", "unique"=>"false", "unique_condition"=>"", "visible"=>"true", "on_js_event"=>"", "hide"=>"false", "generate"=>"true", "cryptography"=>"true", "cryptography_type"=>"aes", "aes_password"=>"aes_password"),
    "validator"      => array("header"=>"Password Validator", "type"=>"validator", "req_type"=>"sv", "width"=>"210px", "title"=>"", "readonly"=>"false", "maxlength"=>"-1", "default"=>"", "visible"=>(($mode == "add") ? "true" : "false"), "on_js_event"=>"", "for_field"=>"field_password", "validation_type"=>"password"),
    "field_checkbox" => array("header"=>"Checkbox", "type"=>"checkbox", "req_type"=>"st", "width"=>"210px", "title"=>"", "readonly"=>"false", "maxlength"=>"-1", "default"=>"", "unique"=>"false", "unique_condition"=>"", "visible"=>"true", "on_js_event"=>"", "true_value"=>1, "false_value"=>0),
    "field_color"    => array("header"=>"Color",    "type"=>"color",    "req_type"=>"st", "width"=>"210px", "title"=>"", "readonly"=>"false", "maxlength"=>"-1", "default"=>"", "unique"=>"false", "unique_condition"=>"", "visible"=>"true", "on_js_event"=>"", "view_type"=>"picker", "save_format"=>"hexcodes"),
    "field_percent"  => array("header"=>"Percent",  "type"=>"percent",  "req_type"=>"rt", "width"=>"70px", "title"=>"", "readonly"=>"false", "maxlength"=>"4", "default"=>"", "unique"=>"false", "unique_condition"=>"", "visible"=>"true", "on_js_event"=>"", "decimal_places"=>"2", "dec_separator"=>"."),
    "field_hidden"   => array("header"=>"Hidden",   "type"=>"hidden",   "req_type"=>"st", "default"=>@date("Y-m-d"), "value"=>"", "unique"=>"false", "visible"=>(($mode == "add") ? "false" : "true")),
    "field_link"     => array("header"=>"Link (add/edit modes)",     "type"=>"link",     "req_type"=>"st", "width"=>"210px", "title"=>"", "readonly"=>"false", "maxlength"=>"-1", "default"=>"http://", "unique"=>"false", "unique_condition"=>"", "visible"=>true, "on_js_event"=>""),
);

if($mode == "details"){
    $em_columns["field_link"] = array("header"=>"Link (details mode)",     "type"=>"link",     "req_type"=>"st", "width"=>"210px", "title"=>"", "readonly"=>"false", "maxlength"=>"-1", "default"=>"", "unique"=>"false", "unique_condition"=>"", "visible"=>true, "on_js_event"=>"", "field_key"=>"field_link", "field_data"=>"field_link", "rel"=>"", "title"=>"", "target"=>"_new", "href"=>"{0}");
}
$dgrid->SetColumnsInEditMode($em_columns);

## +---------------------------------------------------------------------------+
## | 8. Foreign Keys Settings:                                                 |
## +---------------------------------------------------------------------------+
##  *** set foreign keys for add/edit/details modes (if there are linked tables)
$foreign_keys = array(
    "field_foreign_key" => array("table"=>"demo_countries", "field_key"=>"id", "field_name"=>"name", "view_type"=>"dropdownlist", "elements_alignment"=>"horizontal|vertical", "condition"=>"", "order_by_field"=>"name", "order_type"=>"ASC", "show_count"=>"", "on_js_event"=>""),
);
$dgrid->SetForeignKeysEdit($foreign_keys);

## +---------------------------------------------------------------------------+
## | 9. Bind the DataGrid:                                                     |
## +---------------------------------------------------------------------------+
##  *** bind the DataGrid and draw it on the screen
$dgrid->Bind();

?>
