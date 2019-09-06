<?php

class qa_matheditor {
	
	var $urltoroot;
	var $toolbar;
	var $config;
	
	function load_module($directory, $urltoroot) {
		$this->urltoroot=$urltoroot;
	}
	
	function calc_quality($content, $format) {
		if ($format=='html')
			return 1.0;
		elseif ($format=='')
			return 0.8;
		else
			return 0;
	}
	
	function get_field(&$qa_content, $content, $format, $fieldname, $rows /* $autofocus parameter deprecated */) {
		$scriptsrc=$this->urltoroot.'ckeditor.js?'.QA_VERSION;			
		$alreadyadded=false;

		if (isset($qa_content['script_src']))
			foreach ($qa_content['script_src'] as $testscriptsrc)
				if ($testscriptsrc==$scriptsrc)
					$alreadyadded=true;
				
		if (!$alreadyadded) {
			$qa_content['script_src'][]=$scriptsrc;
		}		
			
		if ($format=='html')
			$html=$content;
		else
			$html=qa_html($content, true);
		
		return array(
			'tags' => 'name="'.$fieldname.'"',
			'value' => qa_html($html),
			'rows' => $rows,
		);
	}

	function load_script($fieldname) {
		return "qa_matheditor_".$fieldname."=CKEDITOR.replace(".qa_js($fieldname).", window.qa_matheditor_config);";
	}
	
	function focus_script($fieldname) {
		return "qa_matheditor_".$fieldname.".focus();";
	}
	
	function update_script($fieldname) {
		return "qa_matheditor_".$fieldname.".updateElement();";
	}
	
	function read_post($fieldname) {
		$html=qa_post_text($fieldname);
		
		$htmlformatting=preg_replace('/<\s*\/?\s*(br|p)\s*\/?\s*>/i', '', $html); // remove <p>, <br>, etc... since those are OK in text
		
		if (preg_match('/<.+>/', $htmlformatting)) // if still some other tags, it's worth keeping in HTML
			return array(
				'format' => 'html',
				'content' => qa_sanitize_html($html, false, true), // qa_sanitize_html() is ESSENTIAL for security
			);
		
		else { // convert to text
			$viewer=qa_load_module('viewer', '');

			return array(
				'format' => '',
				'content' => $viewer->get_text($html, 'html', array())
			);
		}
	}
}

/*
	Omit PHP closing tag to help avoid accidental output
*/
