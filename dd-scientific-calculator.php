<?php

/**
 * Plugin Name: Scientific Calculator
 * Plugin URI: https://github.com/MuhammadUsman0304/scientific-calculator
 * Author: Muhammad Usman
 * Author URI: https://www.linkedin.com/in/muhammad-usman-b3439218b/
 * Description: add Scientific calculator into your wordpress website add this shortcode where you want to display the calculator [ddAddCalculator]
 * Version: 1.0.0
 * 
 */


defined('ABSPATH') || die("hey , you can't call me directly");

function dd_regsiter_scripts()
{

  wp_register_style('style', plugin_dir_url(__FILE__) . 'css/style.css', '', false, 'all');
  wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css', '', false, 'all');
  wp_register_script('script', plugin_dir_url(__FILE__) . 'js/script.js', 'jquery', false, true);


  wp_enqueue_style('style');
  wp_enqueue_style('bootstrap');
  wp_enqueue_script('script');
}

add_action('wp_enqueue_scripts', 'dd_regsiter_scripts');

function dd_calc_shortcode()
{
  $calc = '<main>
  <div class="calculator">
    <input type="text" id="screen" maxlength="20">
    <div class="calc-buttons">



      <div class="functions-one">
        <button class="button triggers">C</button>
        <button class="button basic-stuff">(</button>
        <button class="button basic-stuff">)</button>
        <button class="button numbers">7</button>
        <button class="button numbers">8</button>
        <button class="button numbers">9</button>
        <button class="button numbers">4</button>
        <button class="button numbers">5</button>
        <button class="button numbers">6</button>
        <button class="button numbers">1</button>
        <button class="button numbers">2</button>
        <button class="button numbers">3</button>
        <button class="button basic-stuff">±</button>
        <button class="button numbers">0</button>
        <button class="button basic-stuff">.</button>
      </div>




      <div class="functions-two">
        <button class="button triggers">&#60;=</button>
        <button class="button complex-stuff">%</button>
        <button class="button complex-stuff">x !</button>
        <button class="button complex-stuff">x^</button>
        <button class="button basic-stuff">*</button>
        <button class="button basic-stuff">/</button>
        <button class="button complex-stuff">ln</button>
        <button class="button complex-stuff">e</button>
        <button class="button basic-stuff">+</button>
        <button class="button complex-stuff">x ²</button>
        <button class="button complex-stuff">log</button>
        <button class="button complex-stuff">cos</button>
        <button class="button basic-stuff">-</button>
        <button class="button complex-stuff">√</button>
        <button class="button complex-stuff">sin</button>
        <button class="button complex-stuff">tan</button>
        <button class="button triggers">=</button>
        <button class="button complex-stuff">&#x003C0;</button>
        <button class="button complex-stuff">∘</button>
        <button class="button complex-stuff">rad</button>
      </div>

    </div>
  </div>
</main>';

  return $calc;
}

add_shortcode('ddAddCalculator', 'dd_calc_shortcode');
