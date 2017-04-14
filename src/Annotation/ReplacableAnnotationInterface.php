<?php

namespace IdeHelper\Annotation;

interface ReplacableAnnotationInterface {

	/**
	 * @return string
	 */
	public function getDescription();

	/**
	 * @param \IdeHelper\Annotation\AbstractAnnotation $annotation
	 *
	 * @return void
	 */
	public function replaceWith(AbstractAnnotation $annotation);

}
