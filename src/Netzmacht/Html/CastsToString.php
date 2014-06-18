<?php

namespace Netzmacht\Html;

/**
 * Class GenerateableInterface
 * @package Netzmacht\Html
 */
interface CastsToString
{

	/**
	 * Generates the element
	 *
	 * @return string
	 */
	public function generate();


	/**
	 * @return string
	 */
	public function __toString();

}