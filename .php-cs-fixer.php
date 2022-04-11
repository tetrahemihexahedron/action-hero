<?php

$finder = PhpCsFixer\Finder::create()
	->exclude('vendor')
	->exclude('templates/txt')
	->exclude('templates/xml')
	->in(__DIR__);

$config = new PhpCsFixer\Config();
return $config->setRules([
	'@PhpCsFixer' => true,
	'echo_tag_syntax' => [
		'format' => 'short',
		'shorten_simple_statements_only' => true,
	],
	'no_alternative_syntax' => false,
	'blank_line_before_statement' => false,
	'increment_style' => ['style' => 'post'],
	'return_assignment' => false,
	'no_trailing_whitespace_in_comment' => false,
	'ordered_class_elements' => false,
	'single_line_comment_spacing' => false,
	'no_unneeded_import_alias' => false,
])
	->setIndent("\t")
	->setFinder($finder);
