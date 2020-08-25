<?php

/**
 * Tema construido no Desafio21Dias
 *
 * @link http://torneseumprogramador.com.br
 *
 * @package WordPress
 * @subpackage Desafio21Dias
 * @since Desafio21Dias
 */

add_theme_support('post-thumbnails');
//add_post_type_support( 'product','thumbnail' );

// Register Custom Post Type
require_once get_template_directory() . '/custom_post_type/produtos.php';
// Curriculo
require_once get_template_directory() . '/custom_post_type/curriculo.php';

//escolher menu top admin na visualização
add_filter('show_admin_bar', 'admin_bar_custom');
function admin_bar_custom()
{
    return false;
}

//[validar_cpf]
function alunos_tornese_func($atts)
{
    $a = shortcode_atts(array(
        'cpf' => '',
    ), $atts);

    $response = file_get_contents("https://validar-cpf-spring-boot.herokuapp.com/validacpf?cpf={$a['cpf']}");
    $response = json_decode($response);
    if ($response->status == "valido") {
        return "<h1>cpf Válido</h1>";
    } else {
        return "<h1>cpf inválido</h1>";
    }
}
add_shortcode('validar_cpf', 'alunos_tornese_func');

add_action('register_shortcode_ui', 'shortcode_alunos_tornese');
function shortcode_alunos_tornese()
{
    shortcode_ui_register_for_shortcode('validar_cpf', array(
        'label' => 'alunos tornese',
        'listItemImage' => 'dashicons-list-view'
    ));
}

// somento numeros
function soNumero($str)
{
    return preg_replace("/[^0-9]/", "", $str);
}

//[validar_cpf]
function validar_cpf_func($atts)
{
    $cpfOriginal = "";
    if (!isset($_GET["cpf"])) {
        return "";
    } else {
        $cpfOriginal = $_GET["cpf"];
        $cpf = soNumero($cpfOriginal);
    }
    $response = file_get_contents("https://validar-cpf-spring-boot.herokuapp.com/validacpf?cpf=$cpf");
    $response = json_decode($response);
    if ($response->status == "valido") {
        return "<h3 style='color:blue;'>Cpf {$cpfOriginal} Válido</h1>";
    } else {
        return "<h3 style='color:red;'>Cpf {$cpfOriginal} inválido</h1>";
    }
}
add_shortcode('validar_cpf', 'validar_cpf_func');

add_action('register_shortcode_ui', 'shortcode_validar_cpf');
function shortcode_validar_cpf()
{
    shortcode_ui_register_for_shortcode('validar_cpf', array(
        'label' => 'Validar Cpf',
        'listItemImage' => 'dashicons-list-view'
    ));
}

//[form_validacao_cpf]
function form_validacao_cpf_func($atts)
{
    return "
    <form action=''>
    <label>
       CPF:
       <input name='cpf' type='text' placeholder='Digite seu CPF'>
    </label>
    <button type='submit' class='btn btn-info'>Validar</button>
  </form>     
    ";
}
add_shortcode('form_validacao_cpf', 'form_validacao_cpf_func');

add_action('register_shortcode_ui', 'shortcode_form_validacao_cpf');
function shortcode_form_validacao_cpf()
{
    shortcode_ui_register_for_shortcode('form_validacao_cpf', array(
        'label' => 'form_validacao_cpf',
        'listItemImage' => 'dashicons-list-view'
    ));
}


























// [bartag foo="foo-value"]
function bartag_func($atts)
{
    $a = shortcode_atts(array(
        'foo' => 'something',
        'bar' => 'something else',
    ), $atts);

    return "<br><h2>foo = {$a['foo']}</h2>";
}
add_shortcode('bartag', 'bartag_func');

//[caption]content[/caption]
function caption_shortcode($atts, $content = null)
{
    return '<span class="caption">' . $content . '</span>';
}
add_shortcode('caption', 'caption_shortcode');

register_nav_menus(
    array(
        'MenuPrincipal' => __('Menu Site', 'meu-text-domain')
    )
);