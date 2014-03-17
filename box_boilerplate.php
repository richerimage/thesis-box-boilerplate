<?php
/*
Name: Thesis Box Boilerplate
Author: Richard Barratt - richerimage.co.uk
Version: 1.0
Description: A box boilerpate for the Thesis 2 framework for Wordpress. Make sure your file is called box.php. Zip it in a file named the same as your class. For more info see diythemes.com
Class: thesis_box_boilerplate
 */

class thesis_box_boilerplate extends thesis_box {
    
  // You dont need to add the below for a standard box since it will default
  // to this type. Other otions are rotator and false.
  public $type = 'box';
  
  protected function translate() {
          $this->title = __('My Box Title', $this->_class);
          $this->name =  __('My Box Title', $this->_class); // Remove this line if you only require a single instance of your box
  }
  
  protected function construct() {
    // Add actions, ect, in here - runs on every page load!
  }
  
  public function preload() {
    // Add enqueues, ect, in here - runs only on templates your box appears in!
  }
    
  protected function class_options() { 
    // These optiuons appear in the 'Boxes. menu
    return array(
      'sample_text_box_option' => array(
        'type' => 'textarea',
        'rows' => 12,
        'tooltip' => __('Enter your tool tip here', $this->_class)
      ),
      'sample_checkbox_option' => array(
        'type' => 'checkbox',
        'label' =>  __('Which option do you want?', $this->_class),
        'options' => array(
          'first_check_box' => __('First option', $this->_class),
          'second_check_box' => __('Second option', $this->_class),
          'third_check_box' => __('Third option', $this->_class)
        )
      )
    );
  }

  // instance-based options
  protected function options() { 
    // options created here result in options displayed under "Skin Content" for EACH box used
    return array(
      'sample_text_option' => array(
        'type' => 'text',
        'label' => __('Sample text option label', $this->_class),
        'width' => 'medium',
        'tooltip' => __('Enter your tool tip here', $this->_class)
      ),
      'sample_select_option' => array(
        'type' => 'select',
        'label' => __('Sample select option label', $this->_class),
        'options' => array(
          'option_one' =>  __('Option one label', $this->_class),
          'option_two' =>  __('Option two label', $this->_class),
          'option_three' =>  __('Option three label', $this->_class)
        )
      )
    );
  }
    
  // Also create an HTML tag option 
  protected function html_options (){
    // options created here result in options displayed within each box
    global $thesis;
    $html = $thesis->api->html_options(array(
      'div' => 'div',
      'p' => 'p',
      'span' => 'span'), 'div');
    unset($html['id']); // removes the id from the box html options
    $html['sample_html_option'] = array(
      'type' => 'radio',
      'label' => __('Radio button label', $this->_class),
      'options' => array(
              'radio_option_one' =>  __('Option one label', $this->_class),
              'radio_option_two' =>  __('Option two label', $this->_class),
              'radio_option_three' =>  __('Option three label', $this->_class)
      )
    );
    return $html;
  }
 
  public function html($args = array()) {
    extract($args = is_array($args) ? $args : array());
    $tab = str_repeat("\t", !empty($depth) ? $depth : 0); // the magic $tab function
    /* Box HTML output should be echoed here */
  }
        
    
}
