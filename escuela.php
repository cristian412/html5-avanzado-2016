<?php
function peticion($orden){
  ########### CONEXION #########################################
  $user = 'b4924e9e775cc0';
  $pass = '8f4d7791fef8ca1';
  $db   = 'heroku_d00b69afc685a2e';
  $server = 'us-cdbr-iron-east-05.cleardb.net';
  $con = mysqli_connect($server,$user,$pass,$db);
  $res = mysqli_query($con, $orden);
  while ($row = mysqli_fetch_assoc($res)) $li[] = $row;
  mysqli_free_result($res);
  mysqli_close($con);
  return $li;
}
function conectar($orden){
  ########### CONEXION #########################################
  $user = 'b4924e9e775cc0';
  $pass = 'aca33d65';
  $db   = 'heroku_d00b69afc685a2e';
  $con = mysqli_connect("localhost",$user,$pass,$db);
  $res = mysqli_query($con, $orden);
  mysqli_free_result($res);
  mysqli_close($con);
  return $res;
}

$var = 'HECTOR';
$botones = '';
$li = peticion("show tables");




?>
<!DOCTYPE html>
<html>
<head>
	<title>Lecciones HTML</title>
	<style type="text/css">
		#sidenav a {
      font-family: "Segoe UI",Arial,sans-serif;
      text-decoration: none;
      display: block;
      padding: 2px 1px 1px 16px;
    }
    h3 {
      color: darkBlue;
      font-family: "Trebuchet MS"
    }
	</style>
</head>
<body>
<h1>Lecciones html <?=$var?>  </h1>
  <pre>
    <?=print_r($li)?>
  </pre>
  <h3>
   Hola--- <?=$br?>
  </h3>
  
  
<div class="content" id="sidenav" style="margin-left: 300px">
<div class="w3-light-grey" id="leftmenuinnerinner">
<!--  <a href='javascript:void(0)' onclick='close_menu()' class='w3-button w3-hide-large w3-large w3-display-topright' style='right:16px;padding:3px 12px;font-weight:bold;'>&times;</a>-->
<h2 class="left"><span class="left_h2">HTML5</span> Tutorial</h2>
  <h3>Section 1</h3>
    <a target="_blank" href="default" class="active">1 HTML HOME</a>
    <a target="_blank" href="html_intro">2 HTML Introduction</a>
    <a target="_blank" href="html_editors">3 HTML Editors</a>
    <a target="_blank" href="html_basic">4 HTML Basic</a>
    <a target="_blank" href="html_elements">5 HTML Elements</a>
    <a target="_blank" href="html_attributes">6 HTML Attributes</a>
    <a target="_blank" href="html_headings">7 HTML Headings</a>
    <a target="_blank" href="html_paragraphs">8 HTML Paragraphs</a>
    <a target="_blank" href="html_styles">9 HTML Styles</a>
    <a target="_blank" href="html_formatting">10 HTML Formatting</a>
    <a target="_blank" href="html_quotation_elements">11 HTML Quotations</a>
    <a target="_blank" href="html_comments">12 HTML Comments</a>
    <a target="_blank" href="html_colors">13 HTML Colors</a>
    <a target="_blank" href="html_css">14 HTML CSS</a>
    <a target="_blank" href="html_links">15 HTML Links</a>
    <a target="_blank" href="html_images">16 HTML Images</a>
<!--     <div class="tut_overview">
      <a target="_blank" href="html_images">&emsp;Images</a>
      <a target="_blank" href="html_images_imagemap">&emsp;Image Map</a>
      <a target="_blank" href="html_images_background">&emsp;Background Images</a>
      <a target="_blank" href="html_images_picture">&emsp;The Picture Element</a>
    </div> -->
  <h3>Section 2</h3>
<a target="_blank" href="html_tables">HTML Tables</a>
<a target="_blank" href="html_lists">HTML Lists</a>
<a target="_blank" href="html_blocks">HTML Blocks</a>
<a target="_blank" href="html_classes">HTML Classes</a>
<a target="_blank" href="html_id">HTML Id</a>
<a target="_blank" href="html_iframe">HTML Iframes</a>
<a target="_blank" href="html_scripts">HTML JavaScript</a>
<a target="_blank" href="html_filepaths">HTML File Paths</a>
<a target="_blank" href="html_head">HTML Head</a>
<a target="_blank" href="html_layout">HTML Layout</a>
<a target="_blank" href="html_responsive">HTML Responsive</a>
<a target="_blank" href="html_computercode_elements">HTML Computercode</a>
<a target="_blank" href="html_entities">HTML Entities</a>
<a target="_blank" href="html_symbols">HTML Symbols</a>
<a target="_blank" href="html_charset">HTML Charset</a>
<a target="_blank" href="html_urlencode">HTML URL Encode</a>
<a target="_blank" href="html_xhtml">HTML XHTML</a>
<br>
<h2 class="left"><span class="left_h2">HTML</span> Forms</h2>
<a target="_blank" href="html_forms">HTML Forms</a>
<a target="_blank" href="html_form_elements">HTML Form Elements</a>
<a target="_blank" href="html_form_input_types">HTML Input Types</a>
<a target="_blank" href="html_form_attributes">HTML Input Attributes</a>
<br>
<h2 class="left"><span class="left_h2">HTML5</span></h2>
<a target="_blank" href="html5_intro">HTML5 Intro</a>
<a target="_blank" href="html5_browsers">HTML5 Support</a>
<a target="_blank" href="html5_new_elements">HTML5 New Elements</a>
<a target="_blank" href="html5_semantic_elements">HTML5 Semantics</a>
<a target="_blank" href="html5_migration">HTML5 Migration</a>
<a target="_blank" href="html5_syntax">HTML5 Style Guide</a>
<br>
<h2 class="left"><span class="left_h2">HTML</span> Graphics</h2>
<a target="_blank" href="html5_canvas">HTML Canvas</a>
<a target="_blank" href="html5_svg">HTML SVG</a>
<!--<a target="_blank" href="html_googlemaps">HTML Google Maps</a>-->
<br>
<h2 class="left"><span class="left_h2">HTML</span> Media</h2>
<a target="_blank" href="html_media">HTML Media</a>
<a target="_blank" href="html5_video">HTML Video</a>
<a target="_blank" href="html5_audio">HTML Audio</a>
<a target="_blank" href="html_object">HTML Plug-ins</a>
<a target="_blank" href="html_youtube">HTML YouTube</a>
<br>
<h2 class="left"><span class="left_h2">HTML</span> APIs</h2>
<a target="_blank" href="html5_geolocation">HTML Geolocation</a>
<a target="_blank" href="html5_draganddrop">HTML Drag/Drop</a>
<a target="_blank" href="html5_webstorage">HTML Web Storage</a>
<a target="_blank" href="html5_webworkers">HTML Web Workers</a>
<a target="_blank" href="html5_serversentevents">HTML SSE</a>
<br>
<h2 class="left"><span class="left_h2">HTML</span> Examples</h2>
<a target="_blank" href="html_examples">HTML Examples</a>
<a target="_blank" href="html_quiz">HTML Quiz</a>
<a target="_blank" href="html_exercises">HTML Exercises</a>
<a target="_blank" href="html_exam">HTML Certificate</a>
<a target="_blank" href="html_summary">HTML Summary</a>
<a target="_blank" href="html_accessibility">HTML Accessibility</a>
<br>
<h2 class="left"><span class="left_h2">HTML</span> References</h2>
<a target="_blank" href="/tags/default">HTML Tag List</a>
<a target="_blank" href="/tags/ref_attributes">HTML Attributes</a>
<a target="_blank" href="/tags/ref_standardattributes">HTML Global Attributes</a>
<a target="_blank" href="/tags/ref_eventattributes">HTML Events</a>
<a target="_blank" href="/tags/ref_colornames">HTML Colors</a>
<a target="_blank" href="/tags/ref_canvas">HTML Canvas</a>
<a target="_blank" href="/tags/ref_av_dom">HTML Audio/Video</a>
<a target="_blank" href="/tags/ref_html_dtd">HTML Doctypes</a>
<a target="_blank" href="/tags/ref_charactersets">HTML Character Sets</a>
<a target="_blank" href="/tags/ref_urlencode">HTML URL Encode</a>
<a target="_blank" href="/tags/ref_language_codes">HTML Lang Codes</a>
<a target="_blank" href="/tags/ref_httpmessages">HTTP Messages</a>
<a target="_blank" href="/tags/ref_httpmethods">HTTP Methods</a>
<a target="_blank" href="/tags/ref_pxtoemconversion">PX to EM Converter</a>
<a target="_blank" href="/tags/ref_keyboardshortcuts">Keyboard Shortcuts</a>
      <br><br>

<h1>CSS TUTORIAL</h1>
<div class="w3-light-grey" id="leftmenuinnerinner">
<!--  <a href='javascript:void(0)' onclick='close_menu()' class='w3-button w3-hide-large w3-large w3-display-topright' style='right:16px;padding:3px 12px;font-weight:bold;'>&times;</a>-->
  
<h2 class="left"><span class="left_h2">CSS</span> Tutorial</h2>
    <h3>Section 1</h3>

<a target="_top" href="default.asp" class="active">CSS HOME</a>
<a target="_top" href="css_intro.asp">CSS Introduction</a>
<a target="_top" href="css_syntax.asp">CSS Syntax</a>
<a target="_top" href="css_selectors.asp">CSS Selectors</a>
<a target="_top" href="css_howto.asp">CSS How To</a>
<a target="_top" href="css_colors.asp">CSS Colors</a>
<a target="_top" href="css_background.asp">CSS Backgrounds</a>
<a target="_top" href="css_border.asp">CSS Borders</a>
<a target="_top" href="css_margin.asp">CSS Margins</a>
<a target="_top" href="css_padding.asp">CSS Padding</a>
<a target="_top" href="css_dimension.asp">CSS Height/Width</a>
<a target="_top" href="css_boxmodel.asp">CSS Box Model</a>
<a target="_top" href="css_outline.asp">CSS Outline</a>
<a target="_top" href="css_text.asp">CSS Text</a>
<a target="_top" href="css_font.asp">CSS Fonts</a>
<a target="_top" href="css_icons.asp">CSS Icons</a>
<a target="_top" href="css_link.asp">CSS Links</a>
<a target="_top" href="css_list.asp">CSS Lists</a>

    <h3>Section 2</h3>

  <a target="_top" href="css_table.asp">CSS Tables</a>
<a target="_top" href="css_display_visibility.asp">CSS Display</a>
<a target="_top" href="css_max-width.asp">CSS Max-width</a>
<a target="_top" href="css_positioning.asp">CSS Position</a>
<a target="_top" href="css_overflow.asp">CSS Overflow</a>
<a target="_top" href="css_float.asp">CSS Float</a>
<a target="_top" href="css_inline-block.asp">CSS Inline-block</a>
<a target="_top" href="css_align.asp">CSS Align</a>
<a target="_top" href="css_combinators.asp">CSS Combinators</a>
<a target="_top" href="css_pseudo_classes.asp">CSS Pseudo-class</a>
<a target="_top" href="css_pseudo_elements.asp">CSS Pseudo-element</a>
<a target="_top" href="css_image_transparency.asp">CSS Opacity</a>
<a target="_top" href="css_navbar.asp">CSS Navigation Bar</a>
<a target="_top" href="css_dropdowns.asp">CSS Dropdowns</a>
<a target="_top" href="css_image_gallery.asp">CSS Image Gallery</a>
<a target="_top" href="css_image_sprites.asp">CSS Image Sprites</a>
<a target="_top" href="css_attribute_selectors.asp">CSS Attr Selectors</a>
<a target="_top" href="css_form.asp">CSS Forms</a>
<a target="_top" href="css_counters.asp">CSS Counters</a>
<a target="_top" href="css_website_layout.asp">CSS Website Layout</a>
<a target="_top" href="css_units.asp">CSS Units</a>
<a target="_top" href="css_specificity.asp">CSS Specificity</a>

  <br>
<h2 class="left"><span class="left_h2">CSS Advanced</span></h2>
<a target="_top" href="css3_borders.asp">CSS Rounded Corners</a>
<a target="_top" href="css3_border_images.asp">CSS Border Images</a>
<a target="_top" href="css3_backgrounds.asp">CSS Backgrounds</a>
<a target="_top" href="css3_colors.asp">CSS Colors</a>
<a target="_top" href="css3_gradients.asp">CSS Gradients</a>
<a target="_top" href="css3_shadows.asp">CSS Shadows</a>
<a target="_top" href="css3_text_effects.asp">CSS Text Effects</a>
<a target="_top" href="css3_fonts.asp">CSS Web Fonts</a>
<a target="_top" href="css3_2dtransforms.asp">CSS 2D Transforms</a>
<a target="_top" href="css3_3dtransforms.asp">CSS 3D Transforms</a>
<a target="_top" href="css3_transitions.asp">CSS Transitions</a>
<a target="_top" href="css3_animations.asp">CSS Animations</a>
<a target="_top" href="css_tooltip.asp">CSS Tooltips</a>
<a target="_top" href="css3_images.asp">CSS Style Images</a>
<a target="_top" href="css3_object-fit.asp">CSS object-fit</a>
<a target="_top" href="css3_buttons.asp">CSS Buttons</a>
<a target="_top" href="css3_pagination.asp">CSS Pagination</a>
<a target="_top" href="css3_multiple_columns.asp">CSS Multiple Columns</a>
<a target="_top" href="css3_user_interface.asp">CSS User Interface</a>
<a target="_top" href="css3_variables.asp">CSS Variables</a>
<a target="_top" href="css3_box-sizing.asp">CSS Box Sizing</a>
<a target="_top" href="css3_flexbox.asp">CSS Flexbox</a>
<a target="_top" href="css3_mediaqueries.asp">CSS Media Queries</a>
<a target="_top" href="css3_mediaqueries_ex.asp">CSS MQ Examples</a>
  
<br>
<h2 class="left"><span class="left_h2">CSS</span> Responsive</h2>
<a target="_top" href="css_rwd_intro.asp">RWD Intro</a>
<a target="_top" href="css_rwd_viewport.asp">RWD Viewport</a>
<a target="_top" href="css_rwd_grid.asp">RWD Grid View</a>
<a target="_top" href="css_rwd_mediaqueries.asp">RWD Media Queries</a>
<a target="_top" href="css_rwd_images.asp">RWD Images</a>
<a target="_top" href="css_rwd_videos.asp">RWD Videos</a>
<a target="_top" href="css_rwd_frameworks.asp">RWD Frameworks</a>
<a target="_top" href="css_rwd_templates.asp">RWD Templates</a>
  
<br>
<h2 class="left"><span class="left_h2">CSS</span> Grid</h2>
<a target="_top" href="css_grid.asp">Grid Intro</a>
<a target="_top" href="css_grid_container.asp">Grid Container</a>
<a target="_top" href="css_grid_item.asp">Grid Item</a>
  
<br>
<h2 class="left"><span class="left_h2">CSS</span> Examples</h2>
<a target="_top" href="css_templates.asp">CSS Templates</a>
<a target="_top" href="css_examples.asp">CSS Examples</a>
<a target="_top" href="css_quiz.asp">CSS Quiz</a>
<a target="_top" href="css_exercises.asp">CSS Exercises</a>
<a target="_top" href="css_exam.asp">CSS Certificate</a>
  
<br>
<h2 class="left"><span class="left_h2">CSS</span> References</h2>
<a target="_top" href="/cssref/default.asp">CSS Reference</a>
<a target="_top" href="/cssref/css_selectors.asp">CSS Selectors</a>
<a target="_top" href="/cssref/css_functions.asp">CSS Functions</a>
<a target="_top" href="/cssref/css_ref_aural.asp">CSS Reference Aural</a>
<a target="_top" href="/cssref/css_websafe_fonts.asp">CSS Web Safe Fonts</a>
<a target="_top" href="/cssref/css_animatable.asp">CSS Animatable</a>
<a target="_top" href="/cssref/css_units.asp">CSS Units</a>
<a target="_top" href="/cssref/css_pxtoemconversion.asp">CSS PX-EM Converter</a>
<a target="_top" href="/cssref/css_colors.asp">CSS Colors</a>
<a target="_top" href="/cssref/css_colors_legal.asp">CSS Color Values</a>
<a target="_top" href="/cssref/css_default_values.asp">CSS Default Values</a>
<a target="_top" href="/cssref/css3_browsersupport.asp">CSS Browser Support</a>
      <br><br>
    </div>

<h1>JAVASCRIPT</h1>
<div class="w3-light-grey" id="leftmenuinnerinner">
<!--  <a href='javascript:void(0)' onclick='close_menu()' class='w3-button w3-hide-large w3-large w3-display-topright' style='right:16px;padding:3px 12px;font-weight:bold;'>&times;</a>-->
<h2 class="left">JS Tutorial</h2>
<a target="_top" href="default.asp" class="active">JS HOME</a>
<a target="_top" href="js_intro.asp">JS Introduction</a>
<a target="_top" href="js_whereto.asp">JS Where To</a>
<a target="_top" href="js_output.asp">JS Output</a>
<a target="_top" href="js_statements.asp">JS Statements</a>
<a target="_top" href="js_syntax.asp">JS Syntax</a>
<a target="_top" href="js_comments.asp">JS Comments</a>
<a target="_top" href="js_variables.asp">JS Variables</a>
<a target="_top" href="js_operators.asp">JS Operators</a>
<a target="_top" href="js_arithmetic.asp">JS Arithmetic</a>
<a target="_top" href="js_assignment.asp">JS Assignment</a>
<a target="_top" href="js_datatypes.asp">JS Data Types</a>
<a target="_top" href="js_functions.asp">JS Functions</a>
<a target="_top" href="js_objects.asp">JS Objects</a>
<a target="_top" href="js_events.asp">JS Events</a>
<a target="_top" href="js_strings.asp">JS Strings</a>
<a target="_top" href="js_string_methods.asp">JS String Methods</a>
<a target="_top" href="js_numbers.asp">JS Numbers</a>
<a target="_top" href="js_number_methods.asp">JS Number Methods</a>
<a target="_top" href="js_arrays.asp">JS Arrays</a>
<a target="_top" href="js_array_methods.asp">JS Array Methods</a>
<a target="_top" href="js_array_sort.asp">JS Array Sort</a>
<a target="_top" href="js_array_iteration.asp">JS Array Iteration</a>
<a target="_top" href="js_dates.asp">JS Dates</a>
<a target="_top" href="js_date_formats.asp">JS Date Formats</a>
<a target="_top" href="js_date_methods.asp">JS Date Get Methods</a>
<a target="_top" href="js_date_methods_set.asp">JS Date Set Methods</a>
<a target="_top" href="js_math.asp">JS Math</a>
<a target="_top" href="js_random.asp">JS Random</a>
<a target="_top" href="js_booleans.asp">JS Booleans</a>
<a target="_top" href="js_comparisons.asp">JS Comparisons</a>
<a target="_top" href="js_if_else.asp">JS Conditions</a>
<a target="_top" href="js_switch.asp">JS Switch</a>
<a target="_top" href="js_loop_for.asp">JS Loop For</a>
<a target="_top" href="js_loop_while.asp">JS Loop While</a>
<a target="_top" href="js_break.asp">JS Break</a>
<a target="_top" href="js_type_conversion.asp">JS Type Conversion</a>
<a target="_top" href="js_bitwise.asp">JS Bitwise</a>
<a target="_top" href="js_regexp.asp">JS RegExp</a>
<a target="_top" href="js_errors.asp">JS Errors</a>
<a target="_top" href="js_scope.asp">JS Scope</a>
<a target="_top" href="js_hoisting.asp">JS Hoisting</a>
<a target="_top" href="js_strict.asp">JS Strict Mode</a>
<a target="_top" href="js_this.asp">JS this Keyword</a>
<a target="_top" href="js_let.asp">JS Let</a>
<a target="_top" href="js_const.asp">JS Const</a>
<a target="_top" href="js_arrow_function.asp">JS Arrow Function</a>
<a target="_top" href="js_classes.asp">JS Classes</a>
<a target="_top" href="js_debugging.asp">JS Debugging</a>
<a target="_top" href="js_conventions.asp">JS Style Guide</a>
<a target="_top" href="js_best_practices.asp">JS Best Practices</a>
<a target="_top" href="js_mistakes.asp">JS Mistakes</a>
<a target="_top" href="js_performance.asp">JS Performance</a>
<a target="_top" href="js_reserved.asp">JS Reserved Words</a>
<a target="_top" href="js_versions.asp">JS Versions</a>
<a target="_top" href="js_es5.asp">JS Version ES5</a>
<a target="_top" href="js_es6.asp">JS Version ES6</a>
<a target="_top" href="js_json.asp">JS JSON</a>
<br>
<h2 class="left">JS Forms</h2>
<a target="_top" href="js_validation.asp">JS Forms</a>
<a target="_top" href="js_validation_api.asp">Forms API</a>
<br>
<h2 class="left">JS Objects</h2>
<a target="_top" href="js_object_definition.asp">Object Definitions</a>
<a target="_top" href="js_object_properties.asp">Object Properties</a>
<a target="_top" href="js_object_methods.asp">Object Methods</a>
<a target="_top" href="js_object_accessors.asp">Object Accessors</a>
<a target="_top" href="js_object_constructors.asp">Object Constructors</a>
<a target="_top" href="js_object_prototypes.asp">Object Prototypes</a>
<a target="_top" href="js_object_es5.asp">Object ECMAScript 5</a>
<br>
<h2 class="left">JS Functions</h2>
<a target="_top" href="js_function_definition.asp">Function Definitions</a>
<a target="_top" href="js_function_parameters.asp">Function Parameters</a>
<a target="_top" href="js_function_invocation.asp">Function Invocation</a>
<a target="_top" href="js_function_call.asp">Function Call</a>
<a target="_top" href="js_function_apply.asp">Function Apply</a>
<a target="_top" href="js_function_closures.asp">Function Closures</a>
<br>
<h2 class="left">JS HTML DOM</h2>
<a target="_top" href="js_htmldom.asp">DOM Intro</a>
<a target="_top" href="js_htmldom_methods.asp">DOM Methods</a>
<a target="_top" href="js_htmldom_document.asp">DOM Document</a>
<a target="_top" href="js_htmldom_elements.asp">DOM Elements</a>
<a target="_top" href="js_htmldom_html.asp">DOM HTML</a>
<a target="_top" href="js_htmldom_css.asp">DOM CSS</a>
<a target="_top" href="js_htmldom_animate.asp">DOM Animations</a>
<a target="_top" href="js_htmldom_events.asp">DOM Events</a>
<a target="_top" href="js_htmldom_eventlistener.asp">DOM Event Listener</a>
<a target="_top" href="js_htmldom_navigation.asp">DOM Navigation</a>
<a target="_top" href="js_htmldom_nodes.asp">DOM Nodes</a>
<a target="_top" href="js_htmldom_collections.asp">DOM Collections</a>
<a target="_top" href="js_htmldom_nodelist.asp">DOM Node Lists</a>
<br>
<h2 class="left">JS Browser BOM</h2>
<a target="_top" href="js_window.asp">JS Window</a>
<a target="_top" href="js_window_screen.asp">JS Screen</a>
<a target="_top" href="js_window_location.asp">JS Location</a>
<a target="_top" href="js_window_history.asp">JS History</a>
<a target="_top" href="js_window_navigator.asp">JS Navigator</a>
<a target="_top" href="js_popup.asp">JS Popup Alert</a>
<a target="_top" href="js_timing.asp">JS Timing</a>
<a target="_top" href="js_cookies.asp">JS Cookies</a>
<br>
<h2 class="left">JS AJAX</h2>
<a target="_top" href="js_ajax_intro.asp">AJAX Intro</a>
<a target="_top" href="js_ajax_http.asp">AJAX XMLHttp</a>
<a target="_top" href="js_ajax_http_send.asp">AJAX Request</a>
<a target="_top" href="js_ajax_http_response.asp">AJAX Response</a>
<a target="_top" href="js_ajax_xmlfile.asp">AJAX XML File</a>
<a target="_top" href="js_ajax_php.asp">AJAX PHP</a>
<a target="_top" href="js_ajax_asp.asp">AJAX ASP</a>
<a target="_top" href="js_ajax_database.asp">AJAX Database</a>
<a target="_top" href="js_ajax_applications.asp">AJAX Applications</a>
<a target="_top" href="js_ajax_examples.asp">AJAX Examples</a>
<br>
<h2 class="left">JS JSON</h2>
<a target="_top" href="js_json_intro.asp">JSON Intro</a>
<a target="_top" href="js_json_syntax.asp">JSON Syntax</a>
<a target="_top" href="js_json_xml.asp">JSON vs XML</a>
<a target="_top" href="js_json_datatypes.asp">JSON Data Types</a>
<a target="_top" href="js_json_parse.asp">JSON Parse</a>
<a target="_top" href="js_json_stringify.asp">JSON Stringify</a>
<a target="_top" href="js_json_objects.asp">JSON Objects</a>
<a target="_top" href="js_json_arrays.asp">JSON Arrays</a>
<a target="_top" href="js_json_php.asp">JSON PHP</a>
<a target="_top" href="js_json_html.asp">JSON HTML</a>
<a target="_top" href="js_json_jsonp.asp">JSON JSONP</a>
<br>
<h2 class="left">JS vs jQuery</h2>
<a target="_top" href="js_jquery_selectors.asp">jQuery Selectors</a>
<a target="_top" href="js_jquery_elements.asp">jQuery HTML</a>
<a target="_top" href="js_jquery_css.asp">jQuery CSS</a>
<a target="_top" href="js_jquery_dom.asp">jQuery DOM</a>
<br>
<h2 class="left">JS Examples</h2>
<a target="_top" href="js_examples.asp">JS Examples</a>
<a target="_top" href="js_dom_examples.asp">JS HTML DOM</a>
<a target="_top" href="js_input_examples.asp">JS HTML Input</a>
<a target="_top" href="js_ex_dom.asp">JS HTML Objects</a>
<a target="_top" href="js_events_examples.asp">JS HTML Events</a>
<a target="_top" href="js_ex_browser.asp">JS Browser</a>
<a target="_top" href="js_exercises.asp">JS Exercises</a>
<a target="_top" href="js_quiz.asp">JS Quiz</a>
<a target="_top" href="js_exam.asp">JS Certificate</a>
<br>
<h2 class="left">JS References</h2>
<a target="_top" href="/jsref/default.asp">JavaScript Objects</a>
<a target="_top" href="/jsref/default.asp">HTML DOM Objects</a>
<br>
      <br><br>
    </div>

<h1>SQL</h1>
<div class="w3-light-grey" id="leftmenuinnerinner">
<!--  <a href='javascript:void(0)' onclick='close_menu()' class='w3-button w3-hide-large w3-large w3-display-topright' style='right:16px;padding:3px 12px;font-weight:bold;'>&times;</a>-->
<h2 class="left"><span class="left_h2">SQL</span> Tutorial</h2>
<a target="_top" href="default.asp">SQL HOME</a>
<a target="_top" href="sql_intro.asp">SQL Intro</a>
<a target="_top" href="sql_syntax.asp">SQL Syntax</a>
<a target="_top" href="sql_select.asp">SQL Select</a>
<a target="_top" href="sql_distinct.asp" class="active">SQL Select Distinct</a>
<a target="_top" href="sql_where.asp">SQL Where</a>
<a target="_top" href="sql_and_or.asp">SQL And, Or, Not</a>
<a target="_top" href="sql_orderby.asp">SQL Order By</a>
<a target="_top" href="sql_insert.asp">SQL Insert Into</a>
<a target="_top" href="sql_null_values.asp">SQL Null Values</a>
<a target="_top" href="sql_update.asp">SQL Update</a>
<a target="_top" href="sql_delete.asp">SQL Delete</a>
<a target="_top" href="sql_top.asp">SQL Select Top</a>
<a target="_top" href="sql_min_max.asp">SQL Min and Max</a>
<a target="_top" href="sql_count_avg_sum.asp">SQL Count, Avg, Sum</a>
<a target="_top" href="sql_like.asp">SQL Like</a>
<a target="_top" href="sql_wildcards.asp">SQL Wildcards</a>
<a target="_top" href="sql_in.asp">SQL In</a>
<a target="_top" href="sql_between.asp">SQL Between</a>
<a target="_top" href="sql_alias.asp">SQL Aliases</a>
<a target="_top" href="sql_join.asp">SQL Joins</a>
<a target="_top" href="sql_join_inner.asp">SQL Inner Join</a>
<a target="_top" href="sql_join_left.asp">SQL Left Join</a>
<a target="_top" href="sql_join_right.asp">SQL Right Join</a>
<a target="_top" href="sql_join_full.asp">SQL Full Join</a>
<a target="_top" href="sql_join_self.asp">SQL Self Join</a>
<a target="_top" href="sql_union.asp">SQL Union</a>
<a target="_top" href="sql_groupby.asp">SQL Group By</a>
<a target="_top" href="sql_having.asp">SQL Having</a>
<a target="_top" href="sql_exists.asp">SQL Exists</a>
<a target="_top" href="sql_any_all.asp">SQL Any, All</a>
<a target="_top" href="sql_select_into.asp">SQL Select Into</a>
<a target="_top" href="sql_insert_into_select.asp">SQL Insert Into Select</a>
<a target="_top" href="sql_case.asp">SQL Case</a>
<a target="_top" href="sql_isnull.asp">SQL Null Functions</a>
<a target="_top" href="sql_stored_procedures.asp">SQL Stored Procedures</a>
<a target="_top" href="sql_comments.asp">SQL Comments</a>
<br>
<h2 class="left"><span class="left_h2">SQL</span> Database</h2>
<a target="_top" href="sql_create_db.asp">SQL Create DB</a>
<a target="_top" href="sql_drop_db.asp">SQL Drop DB</a>
<a target="_top" href="sql_backup_db.asp">SQL Backup DB</a>
<a target="_top" href="sql_create_table.asp">SQL Create Table</a>
<a target="_top" href="sql_drop_table.asp">SQL Drop Table</a>
<a target="_top" href="sql_alter.asp">SQL Alter Table</a>
<a target="_top" href="sql_constraints.asp">SQL Constraints</a>
<a target="_top" href="sql_notnull.asp">SQL Not Null</a>
<a target="_top" href="sql_unique.asp">SQL Unique</a>
<a target="_top" href="sql_primarykey.asp">SQL Primary Key</a>
<a target="_top" href="sql_foreignkey.asp">SQL Foreign Key</a>
<a target="_top" href="sql_check.asp">SQL Check</a>
<a target="_top" href="sql_default.asp">SQL Default</a>
<a target="_top" href="sql_create_index.asp">SQL Index</a>
<a target="_top" href="sql_autoincrement.asp">SQL Auto Increment</a>
<a target="_top" href="sql_dates.asp">SQL Dates</a>
<a target="_top" href="sql_view.asp">SQL Views</a>
<a target="_top" href="sql_injection.asp">SQL Injection</a>
<a target="_top" href="sql_hosting.asp">SQL Hosting</a>
<br>
<h2 class="left"><span class="left_h2">SQL</span> References</h2>
<a target="_top" href="sql_ref_keywords.asp">SQL Keywords</a>
  <a target="_top" href="sql_ref_add.asp">ADD</a>
  <a target="_top" href="sql_ref_add_constraint.asp">ADD CONSTRAINT</a>
  <a target="_top" href="sql_ref_alter.asp">ALTER</a>
  <a target="_top" href="sql_ref_alter_column.asp">ALTER COLUMN</a>
  <a target="_top" href="sql_ref_alter_table.asp">ALTER TABLE</a>
  <a target="_top" href="sql_ref_all.asp">ALL</a>
  <a target="_top" href="sql_ref_and.asp">AND</a>
  <a target="_top" href="sql_ref_any.asp">ANY</a>
  <a target="_top" href="sql_ref_as.asp">AS</a>
  <a target="_top" href="sql_ref_asc.asp">ASC</a>
  <a target="_top" href="sql_ref_backup_database.asp">BACKUP DATABASE</a>
  <a target="_top" href="sql_ref_between.asp">BETWEEN</a>
  <a target="_top" href="sql_ref_case.asp">CASE</a>
  <a target="_top" href="sql_ref_check.asp">CHECK</a>
  <a target="_top" href="sql_ref_column.asp">COLUMN</a>
  <a target="_top" href="sql_ref_constraint.asp">CONSTRAINT</a>
  <a target="_top" href="sql_ref_create.asp">CREATE</a>
  <a target="_top" href="sql_ref_create_database.asp">CREATE DATABASE</a>
  <a target="_top" href="sql_ref_create_index.asp">CREATE INDEX</a>
  <a target="_top" href="sql_ref_create_or_replace_view.asp">CREATE OR REPLACE VIEW</a>
  <a target="_top" href="sql_ref_create_table.asp">CREATE TABLE</a>
  <a target="_top" href="sql_ref_create_procedure.asp">CREATE PROCEDURE</a>
  <a target="_top" href="sql_ref_create_unique_index.asp">CREATE UNIQUE INDEX</a>
  <a target="_top" href="sql_ref_create_view.asp">CREATE VIEW</a>
  <a target="_top" href="sql_ref_database.asp">DATABASE</a>
  <a target="_top" href="sql_ref_default.asp">DEFAULT</a>
  <a target="_top" href="sql_ref_delete.asp">DELETE</a>
  <a target="_top" href="sql_ref_desc.asp">DESC</a>
  <a target="_top" href="sql_ref_select_distinct.asp">DISTINCT</a>
  <a target="_top" href="sql_ref_drop.asp">DROP</a>
  <a target="_top" href="sql_ref_drop_column.asp">DROP COLUMN</a>
  <a target="_top" href="sql_ref_drop_constraint.asp">DROP CONSTRAINT</a>
  <a target="_top" href="sql_ref_drop_database.asp">DROP DATABASE</a>
  <a target="_top" href="sql_ref_drop_default.asp">DROP DEFAULT</a>
  <a target="_top" href="sql_ref_drop_index.asp">DROP INDEX</a>
  <a target="_top" href="sql_ref_drop_table.asp">DROP TABLE</a>
  <a target="_top" href="sql_ref_drop_view.asp">DROP VIEW</a>
  <a target="_top" href="sql_ref_exec.asp">EXEC</a>
  <a target="_top" href="sql_ref_exists.asp">EXISTS</a>
  <a target="_top" href="sql_ref_foreign_key.asp">FOREIGN KEY</a>
  <a target="_top" href="sql_ref_from.asp">FROM</a>
  <a target="_top" href="sql_ref_full_outer_join.asp">FULL OUTER JOIN</a>
  <a target="_top" href="sql_ref_group_by.asp">GROUP BY</a>
  <a target="_top" href="sql_ref_having.asp">HAVING</a>
  <a target="_top" href="sql_ref_in.asp">IN</a>
  <a target="_top" href="sql_ref_index.asp">INDEX</a>
  <a target="_top" href="sql_ref_inner_join.asp">INNER JOIN</a>
  <a target="_top" href="sql_ref_insert_into.asp">INSERT INTO</a>
  <a target="_top" href="sql_ref_insert_into_select.asp">INSERT INTO SELECT</a>
  <a target="_top" href="sql_ref_is_null.asp">IS NULL</a>
  <a target="_top" href="sql_ref_is_not_null.asp">IS NOT NULL</a>
  <a target="_top" href="sql_ref_join.asp">JOIN</a>
  <a target="_top" href="sql_ref_left_join.asp">LEFT JOIN</a>
  <a target="_top" href="sql_ref_like.asp">LIKE</a>
  <a target="_top" href="sql_ref_top.asp">LIMIT</a>
  <a target="_top" href="sql_ref_not.asp">NOT</a>
  <a target="_top" href="sql_ref_not_null.asp">NOT NULL</a>
  <a target="_top" href="sql_ref_or.asp">OR</a>
  <a target="_top" href="sql_ref_order_by.asp">ORDER BY</a>
  <a target="_top" href="sql_ref_full_outer_join.asp">OUTER JOIN</a>
  <a target="_top" href="sql_ref_primary_key.asp">PRIMARY KEY</a>
  <a target="_top" href="sql_ref_create_procedure.asp">PROCEDURE</a>
  <a target="_top" href="sql_ref_right_join.asp">RIGHT JOIN</a>
  <a target="_top" href="sql_ref_top.asp">ROWNUM</a>
  <a target="_top" href="sql_ref_select.asp">SELECT</a>
  <a target="_top" href="sql_ref_select_distinct.asp">SELECT DISTINCT</a>
  <a target="_top" href="sql_ref_select_into.asp">SELECT INTO</a>
  <a target="_top" href="sql_ref_top.asp">SELECT TOP</a>
  <a target="_top" href="sql_ref_set.asp">SET</a>
  <a target="_top" href="sql_ref_table.asp">TABLE</a>
  <a target="_top" href="sql_ref_top.asp">TOP</a>
  <a target="_top" href="sql_ref_drop_table.asp">TRUNCATE TABLE</a>
  <a target="_top" href="sql_ref_union.asp">UNION</a>
  <a target="_top" href="sql_ref_union.asp">UNION ALL</a>
  <a target="_top" href="sql_ref_unique.asp">UNIQUE</a>
  <a target="_top" href="sql_ref_update.asp">UPDATE</a>
  <a target="_top" href="sql_ref_values.asp">VALUES</a>
  <a target="_top" href="sql_ref_view.asp">VIEW</a>
  <a target="_top" href="sql_ref_where.asp">WHERE</a>


<a target="_top" href="sql_ref_mysql.asp">MySQL Functions</a>
<span style="display:inline-block;margin-left:10px;padding:5px;margin-top:2px;font-style:italic;">String Functions</span>
<a target="_top" href="func_mysql_ascii.asp">ASCII</a>
<a target="_top" href="func_mysql_char_length.asp">CHAR_LENGTH</a>
<a target="_top" href="func_mysql_character_length.asp">CHARACTER_LENGTH</a>
<a target="_top" href="func_mysql_concat.asp">CONCAT</a>
<a target="_top" href="func_mysql_concat_ws.asp">CONCAT_WS</a>
<a target="_top" href="func_mysql_field.asp">FIELD</a>
<a target="_top" href="func_mysql_find_in_set.asp">FIND_IN_SET</a>
<a target="_top" href="func_mysql_format.asp">FORMAT</a>
<a target="_top" href="func_mysql_insert.asp">INSERT</a>
<a target="_top" href="func_mysql_instr.asp">INSTR</a>
<a target="_top" href="func_mysql_lcase.asp">LCASE</a>
<a target="_top" href="func_mysql_left.asp">LEFT</a>
<a target="_top" href="func_mysql_length.asp">LENGTH</a>
<a target="_top" href="func_mysql_locate.asp">LOCATE</a>
<a target="_top" href="func_mysql_lower.asp">LOWER</a>
<a target="_top" href="func_mysql_lpad.asp">LPAD</a>
<a target="_top" href="func_mysql_ltrim.asp">LTRIM</a>
<a target="_top" href="func_mysql_mid.asp">MID</a>
<a target="_top" href="func_mysql_position.asp">POSITION</a>
<a target="_top" href="func_mysql_repeat.asp">REPEAT</a>
<a target="_top" href="func_mysql_replace.asp">REPLACE</a>
<a target="_top" href="func_mysql_reverse.asp">REVERSE</a>
<a target="_top" href="func_mysql_right.asp">RIGHT</a>
<a target="_top" href="func_mysql_rpad.asp">RPAD</a>
<a target="_top" href="func_mysql_rtrim.asp">RTRIM</a>
<a target="_top" href="func_mysql_space.asp">SPACE</a>
<a target="_top" href="func_mysql_strcmp.asp">STRCMP</a>
<a target="_top" href="func_mysql_substr.asp">SUBSTR</a>
<a target="_top" href="func_mysql_substring.asp">SUBSTRING</a>
<a target="_top" href="func_mysql_substring_index.asp">SUBSTRING_INDEX</a>
<a target="_top" href="func_mysql_trim.asp">TRIM</a>
<a target="_top" href="func_mysql_ucase.asp">UCASE</a>
<a target="_top" href="func_mysql_upper.asp">UPPER</a>

<span style="display:inline-block;margin-left:10px;padding:5px;margin-top:10px;font-style:italic">Numeric Functions</span>
<a target="_top" href="func_mysql_abs.asp">ABS</a>
<a target="_top" href="func_mysql_acos.asp">ACOS</a>
<a target="_top" href="func_mysql_asin.asp">ASIN</a>
<a target="_top" href="func_mysql_atan.asp">ATAN</a>
<a target="_top" href="func_mysql_atan2.asp">ATAN2</a>
<a target="_top" href="func_mysql_avg.asp">AVG</a>
<a target="_top" href="func_mysql_ceil.asp">CEIL</a>
<a target="_top" href="func_mysql_ceiling.asp">CEILING</a>
<a target="_top" href="func_mysql_cos.asp">COS</a>
<a target="_top" href="func_mysql_cot.asp">COT</a>
<a target="_top" href="func_mysql_count.asp">COUNT</a>
<a target="_top" href="func_mysql_degrees.asp">DEGREES</a>
<a target="_top" href="func_mysql_div.asp">DIV</a>
<a target="_top" href="func_mysql_exp.asp">EXP</a>
<a target="_top" href="func_mysql_floor.asp">FLOOR</a>
<a target="_top" href="func_mysql_greatest.asp">GREATEST</a>
<a target="_top" href="func_mysql_least.asp">LEAST</a>
<a target="_top" href="func_mysql_ln.asp">LN</a>
<a target="_top" href="func_mysql_log.asp">LOG</a>
<a target="_top" href="func_mysql_log10.asp">LOG10</a>
<a target="_top" href="func_mysql_log2.asp">LOG2</a>
<a target="_top" href="func_mysql_max.asp">MAX</a>
<a target="_top" href="func_mysql_min.asp">MIN</a>
<a target="_top" href="func_mysql_mod.asp">MOD</a>
<a target="_top" href="func_mysql_pi.asp">PI</a>
<a target="_top" href="func_mysql_pow.asp">POW</a>
<a target="_top" href="func_mysql_power.asp">POWER</a>
<a target="_top" href="func_mysql_radians.asp">RADIANS</a>
<a target="_top" href="func_mysql_rand.asp">RAND</a>
<a target="_top" href="func_mysql_round.asp">ROUND</a>
<a target="_top" href="func_mysql_sign.asp">SIGN</a>
<a target="_top" href="func_mysql_sin.asp">SIN</a>
<a target="_top" href="func_mysql_sqrt.asp">SQRT</a>
<a target="_top" href="func_mysql_sum.asp">SUM</a>
<a target="_top" href="func_mysql_tan.asp">TAN</a>
<a target="_top" href="func_mysql_truncate.asp">TRUNCATE</a>

<span style="display:inline-block;margin-left:10px;padding:5px;margin-top:10px;font-style:italic">Date Functions</span>
<a target="_top" href="func_mysql_adddate.asp">ADDDATE</a>
<a target="_top" href="func_mysql_addtime.asp">ADDTIME</a>
<a target="_top" href="func_mysql_curdate.asp">CURDATE</a>
<a target="_top" href="func_mysql_current_date.asp">CURRENT_DATE</a>
<a target="_top" href="func_mysql_current_time.asp">CURRENT_TIME</a>
<a target="_top" href="func_mysql_current_timestamp.asp">CURRENT_TIMESTAMP</a>
<a target="_top" href="func_mysql_curtime.asp">CURTIME</a>
<a target="_top" href="func_mysql_date.asp">DATE</a>
<a target="_top" href="func_mysql_datediff.asp">DATEDIFF</a>
<a target="_top" href="func_mysql_date_add.asp">DATE_ADD</a>
<a target="_top" href="func_mysql_date_format.asp">DATE_FORMAT</a>
<a target="_top" href="func_mysql_date_sub.asp">DATE_SUB</a>
<a target="_top" href="func_mysql_day.asp">DAY</a>
<a target="_top" href="func_mysql_dayname.asp">DAYNAME</a>
<a target="_top" href="func_mysql_dayofmonth.asp">DAYOFMONTH</a>
<a target="_top" href="func_mysql_dayofweek.asp">DAYOFWEEK</a>
<a target="_top" href="func_mysql_dayofyear.asp">DAYOFYEAR</a>
<a target="_top" href="func_mysql_extract.asp">EXTRACT</a>
<a target="_top" href="func_mysql_from_days.asp">FROM_DAYS</a>
<a target="_top" href="func_mysql_hour.asp">HOUR</a>
<a target="_top" href="func_mysql_last_day.asp">LAST_DAY</a>
<a target="_top" href="func_mysql_localtime.asp">LOCALTIME</a>
<a target="_top" href="func_mysql_localtimestamp.asp">LOCALTIMESTAMP</a>
<a target="_top" href="func_mysql_makedate.asp">MAKEDATE</a>
<a target="_top" href="func_mysql_maketime.asp">MAKETIME</a>
<a target="_top" href="func_mysql_microsecond.asp">MICROSECOND</a>
<a target="_top" href="func_mysql_minute.asp">MINUTE</a>
<a target="_top" href="func_mysql_month.asp">MONTH</a>
<a target="_top" href="func_mysql_monthname.asp">MONTHNAME</a>
<a target="_top" href="func_mysql_now.asp">NOW</a>
<a target="_top" href="func_mysql_period_add.asp">PERIOD_ADD</a>
<a target="_top" href="func_mysql_period_diff.asp">PERIOD_DIFF</a>
<a target="_top" href="func_mysql_quarter.asp">QUARTER</a>
<a target="_top" href="func_mysql_second.asp">SECOND</a>
<a target="_top" href="func_mysql_sec_to_time.asp">SEC_TO_TIME</a>
<a target="_top" href="func_mysql_str_to_date.asp">STR_TO_DATE</a>
<a target="_top" href="func_mysql_subdate.asp">SUBDATE</a>
<a target="_top" href="func_mysql_subtime.asp">SUBTIME</a>
<a target="_top" href="func_mysql_sysdate.asp">SYSDATE</a>
<a target="_top" href="func_mysql_time.asp">TIME</a>
<a target="_top" href="func_mysql_time_format.asp">TIME_FORMAT</a>
<a target="_top" href="func_mysql_time_to_sec.asp">TIME_TO_SEC</a>
<a target="_top" href="func_mysql_timediff.asp">TIMEDIFF</a>
<a target="_top" href="func_mysql_timestamp.asp">TIMESTAMP</a>
<a target="_top" href="func_mysql_to_days.asp">TO_DAYS</a>
<a target="_top" href="func_mysql_week.asp">WEEK</a>
<a target="_top" href="func_mysql_weekday.asp">WEEKDAY</a>
<a target="_top" href="func_mysql_weekofyear.asp">WEEKOFYEAR</a>
<a target="_top" href="func_mysql_year.asp">YEAR</a>
<a target="_top" href="func_mysql_yearweek.asp">YEARWEEK</a>

<span style="display:inline-block;margin-left:10px;padding:5px;margin-top:10px;font-style:italic">Advanced Functions</span>
<a target="_top" href="func_mysql_bin.asp">BIN</a>
<a target="_top" href="func_mysql_binary.asp">BINARY</a>
<a target="_top" href="func_mysql_case.asp">CASE</a>
<a target="_top" href="func_mysql_cast.asp">CAST</a>
<a target="_top" href="func_mysql_coalesce.asp">COALESCE</a>
<a target="_top" href="func_mysql_connection_id.asp">CONNECTION_ID</a>
<a target="_top" href="func_mysql_conv.asp">CONV</a>
<a target="_top" href="func_mysql_convert.asp">CONVERT</a>
<a target="_top" href="func_mysql_current_user.asp">CURRENT_USER</a>
<a target="_top" href="func_mysql_database.asp">DATABASE</a>
<a target="_top" href="func_mysql_if.asp">IF</a>
<a target="_top" href="func_mysql_ifnull.asp">IFNULL</a>
<a target="_top" href="func_mysql_isnull.asp">ISNULL</a>
<a target="_top" href="func_mysql_last_insert_id.asp">LAST_INSERT_ID</a>
<a target="_top" href="func_mysql_nullif.asp">NULLIF</a>
<a target="_top" href="func_mysql_session_user.asp">SESSION_USER</a>
<a target="_top" href="func_mysql_system_user.asp">SYSTEM_USER</a>
<a target="_top" href="func_mysql_user.asp">USER</a>
<a target="_top" href="func_mysql_version.asp">VERSION</a>

<a target="_top" href="sql_ref_sqlserver.asp">SQL Server Functions</a>
  <span style="display:inline-block;margin-left:10px;padding:5px;margin-top:2px;font-style:italic;">String Functions</span>
  <a href="func_sqlserver_ascii.asp">ASCII</a>
  <a href="func_sqlserver_char.asp">CHAR</a>
  <a href="func_sqlserver_charindex.asp">CHARINDEX</a>
  <a href="func_sqlserver_concat.asp">CONCAT</a>
  <a href="func_sqlserver_concat_with_plus.asp">Concat with +</a>
  <a href="func_sqlserver_concat_ws.asp">CONCAT_WS</a>
  <a href="func_sqlserver_datalength.asp">DATALENGTH</a>
  <a href="func_sqlserver_difference.asp">DIFFERENCE</a>
  <a href="func_sqlserver_format.asp">FORMAT</a>
  <a href="func_sqlserver_left.asp">LEFT</a>
  <a href="func_sqlserver_len.asp">LEN</a>
  <a href="func_sqlserver_lower.asp">LOWER</a>
  <a href="func_sqlserver_ltrim.asp">LTRIM</a>
  <a href="func_sqlserver_nchar.asp">NCHAR</a>
  <a href="func_sqlserver_patindex.asp">PATINDEX</a>
  <a href="func_sqlserver_quotename.asp">QUOTENAME</a>
  <a href="func_sqlserver_replace.asp">REPLACE</a>
  <a href="func_sqlserver_replicate.asp">REPLICATE</a>
  <a href="func_sqlserver_reverse.asp">REVERSE</a>
  <a href="func_sqlserver_right.asp">RIGHT</a>
  <a href="func_sqlserver_rtrim.asp">RTRIM</a>
  <a href="func_sqlserver_soundex.asp">SOUNDEX</a>
  <a href="func_sqlserver_space.asp">SPACE</a>
  <a href="func_sqlserver_str.asp">STR</a>
  <a href="func_sqlserver_stuff.asp">STUFF</a>
  <a href="func_sqlserver_substring.asp">SUBSTRING</a>
  <a href="func_sqlserver_translate.asp">TRANSLATE</a>
  <a href="func_sqlserver_trim.asp">TRIM</a>
  <a href="func_sqlserver_unicode.asp">UNICODE</a>
  <a href="func_sqlserver_upper.asp">UPPER</a>

  <span style="display:inline-block;margin-left:10px;padding:5px;margin-top:10px;font-style:italic">Numeric Functions</span>
  <a href="func_sqlserver_abs.asp">ABS</a>
  <a href="func_sqlserver_acos.asp">ACOS</a>
  <a href="func_sqlserver_asin.asp">ASIN</a>
  <a href="func_sqlserver_atan.asp">ATAN</a>
  <a href="func_sqlserver_atn2.asp">ATN2</a>
  <a href="func_sqlserver_avg.asp">AVG</a>
  <a href="func_sqlserver_ceiling.asp">CEILING</a>
  <a href="func_sqlserver_count.asp">COUNT</a>
  <a href="func_sqlserver_cos.asp">COS</a>
  <a href="func_sqlserver_cot.asp">COT</a>
  <a href="func_sqlserver_degrees.asp">DEGREES</a>
  <a href="func_sqlserver_exp.asp">EXP</a>
  <a href="func_sqlserver_floor.asp">FLOOR</a>
  <a href="func_sqlserver_log.asp">LOG</a>
  <a href="func_sqlserver_log10.asp">LOG10</a>
  <a href="func_sqlserver_max.asp">MAX</a>
  <a href="func_sqlserver_min.asp">MIN</a>
  <a href="func_sqlserver_pi.asp">PI</a>
  <a href="func_sqlserver_power.asp">POWER</a>
  <a href="func_sqlserver_radians.asp">RADIANS</a>
  <a href="func_sqlserver_rand.asp">RAND</a>
  <a href="func_sqlserver_round.asp">ROUND</a>
  <a href="func_sqlserver_sign.asp">SIGN</a>
  <a href="func_sqlserver_sin.asp">SIN</a>
  <a href="func_sqlserver_sqrt.asp">SQRT</a>
  <a href="func_sqlserver_square.asp">SQUARE</a>
  <a href="func_sqlserver_sum.asp">SUM</a>
  <a href="func_sqlserver_tan.asp">TAN</a>

  <span style="display:inline-block;margin-left:10px;padding:5px;margin-top:10px;font-style:italic">Date Functions</span>
  <a href="func_sqlserver_current_timestamp.asp">CURRENT_TIMESTAMP</a>
  <a href="func_sqlserver_dateadd.asp">DATEADD</a>
  <a href="func_sqlserver_datediff.asp">DATEDIFF</a>
  <a href="func_sqlserver_datefromparts.asp">DATEFROMPARTS</a>
  <a href="func_sqlserver_datename.asp">DATENAME</a>
  <a href="func_sqlserver_datepart.asp">DATEPART</a>
  <a href="func_sqlserver_day.asp">DAY</a>
  <a href="func_sqlserver_getdate.asp">GETDATE</a>
  <a href="func_sqlserver_getutcdate.asp">GETUTCDATE</a>
  <a href="func_sqlserver_isdate.asp">ISDATE</a>
  <a href="func_sqlserver_month.asp">MONTH</a>
  <a href="func_sqlserver_sysdatetime.asp">SYSDATETIME</a>
  <a href="func_sqlserver_year.asp">YEAR</a>

  <span style="display:inline-block;margin-left:10px;padding:5px;margin-top:10px;font-style:italic">Advanced Functions</span>
  <a href="func_sqlserver_cast.asp">CAST</a>
  <a href="func_sqlserver_coalesce.asp">COALESCE</a>
  <a href="func_sqlserver_convert.asp">CONVERT</a>
  <a href="func_sqlserver_current_user.asp">CURRENT_USER</a>
  <a href="func_sqlserver_iif.asp">IIF</a>  
  <a href="func_sqlserver_isnull.asp">ISNULL</a>
  <a href="func_sqlserver_isnumeric.asp">ISNUMERIC</a>
  <a href="func_sqlserver_nullif.asp">NULLIF</a>
  <a href="func_sqlserver_session_user.asp">SESSION_USER</a>
  <a href="func_sqlserver_sessionproperty.asp">SESSIONPROPERTY</a>
  <a href="func_sqlserver_system_user.asp">SYSTEM_USER</a>
  <a href="func_sqlserver_user_name.asp">USER_NAME</a>

<a target="_top" href="sql_ref_msaccess.asp">MS Access Functions</a>
  <span style="display:inline-block;margin-left:10px;padding:5px;margin-top:2px;font-style:italic;">String Functions</span>
  <a href="func_msaccess_asc.asp">Asc</a>
  <a href="func_msaccess_chr.asp">Chr</a>
  <a href="func_msaccess_concat.asp">Concat with &amp;</a>
  <a href="func_msaccess_curdir.asp">CurDir</a>
  <a href="func_msaccess_format.asp">Format</a>
  <a href="func_msaccess_instr.asp">InStr</a>
  <a href="func_msaccess_instrrev.asp">InstrRev</a>
  <a href="func_msaccess_lcase.asp">LCase</a>
  <a href="func_msaccess_left.asp">Left</a>
  <a href="func_msaccess_len.asp">Len</a>
  <a href="func_msaccess_ltrim.asp">LTrim</a>
  <a href="func_msaccess_mid.asp">Mid</a>
  <a href="func_msaccess_replace.asp">Replace</a>
  <a href="func_msaccess_right.asp">Right</a>
  <a href="func_msaccess_rtrim.asp">RTrim</a>
  <a href="func_msaccess_space.asp">Space</a>
  <a href="func_msaccess_split.asp">Split</a>
  <a href="func_msaccess_str.asp">Str</a>
  <a href="func_msaccess_strcomp.asp">StrComp</a>
  <a href="func_msaccess_strconv.asp">StrConv</a>
  <a href="func_msaccess_strreverse.asp">StrReverse</a>
  <a href="func_msaccess_trim.asp">Trim</a>
  <a href="func_msaccess_ucase.asp">UCase</a>

  <span style="display:inline-block;margin-left:10px;padding:5px;margin-top:10px;font-style:italic">Numeric Functions</span>
  <a href="func_msaccess_abs.asp">Abs</a>
  <a href="func_msaccess_atn.asp">Atn</a>
  <a href="func_msaccess_avg.asp">Avg</a>
  <a href="func_msaccess_cos.asp">Cos</a>
  <a href="func_msaccess_count.asp">Count</a>
  <a href="func_msaccess_exp.asp">Exp</a>
  <a href="func_msaccess_fix.asp">Fix</a>
  <a href="func_msaccess_format_number.asp">Format</a>
  <a href="func_msaccess_int.asp">Int</a>
  <a href="func_msaccess_max.asp">Max</a>
  <a href="func_msaccess_min.asp">Min</a>
  <a href="func_msaccess_randomize.asp">Randomize</a>
  <a href="func_msaccess_rnd.asp">Rnd</a>
  <a href="func_msaccess_round.asp">Round</a>
  <a href="func_msaccess_sgn.asp">Sgn</a>
  <a href="func_msaccess_sqr.asp">Sqr</a>
  <a href="func_msaccess_sum.asp">Sum</a>
  <a href="func_msaccess_val.asp">Val</a>

  <span style="display:inline-block;margin-left:10px;padding:5px;margin-top:10px;font-style:italic">Date Functions</span>
  <a href="func_msaccess_date.asp">Date</a>
  <a href="func_msaccess_dateadd.asp">DateAdd</a>
  <a href="func_msaccess_datediff.asp">DateDiff</a>
  <a href="func_msaccess_datepart.asp">DatePart</a>
  <a href="func_msaccess_dateserial.asp">DateSerial</a>
  <a href="func_msaccess_datevalue.asp">DateValue</a>
  <a href="func_msaccess_day.asp">Day</a>
  <a href="func_msaccess_format_date.asp">Format</a>
  <a href="func_msaccess_hour.asp">Hour</a>
  <a href="func_msaccess_minute.asp">Minute</a>
  <a href="func_msaccess_month.asp">Month</a>
  <a href="func_msaccess_monthname.asp">MonthName</a>
  <a href="func_msaccess_now.asp">Now</a>
  <a href="func_msaccess_second.asp">Second</a>
  <a href="func_msaccess_time.asp">Time</a>
  <a href="func_msaccess_timeserial.asp">TimeSerial</a>
  <a href="func_msaccess_timevalue.asp">TimeValue</a>
  <a href="func_msaccess_weekday.asp">Weekday</a>
  <a href="func_msaccess_weekdayname.asp">WeekdayName</a>
  <a href="func_msaccess_year.asp">Year</a>

  <span style="display:inline-block;margin-left:10px;padding:5px;margin-top:10px;font-style:italic">Other Functions</span>
  <a href="func_msaccess_currentuser.asp">CurrentUser</a>
  <a href="func_msaccess_environ.asp">Environ</a>
  <a href="func_msaccess_isdate.asp">IsDate</a>
  <a href="func_msaccess_isnull.asp">IsNull</a>
  <a href="func_msaccess_isnumeric.asp">IsNumeric</a>
<a target="_top" href="sql_operators.asp">SQL Operators</a>
<a target="_top" href="sql_datatypes.asp">SQL Data Types</a>
<a target="_top" href="sql_quickref.asp">SQL Quick Ref</a>
<br>
<h2 class="left"><span class="left_h2">SQL</span> Examples</h2>
<a target="_top" href="sql_examples.asp">SQL Examples</a>
<a target="_top" href="sql_quiz.asp">SQL Quiz</a>
<a target="_top" href="sql_exercises.asp">SQL Exercises</a>
<a target="_top" href="sql_exam.asp">SQL Certificate</a>
      <br><br>
    </div>

    


    </div>
	
</div>
</body>
</html>
