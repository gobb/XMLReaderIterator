<?php
/*
 * This file is part of the XMLReaderIterator package.
 *
 * Copyright (C) 2012, 2013 hakre <http://hakre.wordpress.com>
 *
 * auto-load / bootstrap (the file-name as common as it is might be little misleading here so far)
 */

$xmlReaderIterator_libPath = __DIR__ . '/src';

require $xmlReaderIterator_libPath . '/XMLReaderAggregate.php';
require $xmlReaderIterator_libPath . '/XMLBuild.php';
require $xmlReaderIterator_libPath . '/XMLAttributeIterator.php';
require $xmlReaderIterator_libPath . '/XMLReaderIterator.php';
require $xmlReaderIterator_libPath . '/XMLReaderNode.php';
require $xmlReaderIterator_libPath . '/XMLReaderElement.php';
require $xmlReaderIterator_libPath . '/XMLChildIterator.php';
require $xmlReaderIterator_libPath . '/XMLElementIterator.php';
require $xmlReaderIterator_libPath . '/XMLChildElementIterator.php';
require $xmlReaderIterator_libPath . '/XMLReaderFilterBase.php';
require $xmlReaderIterator_libPath . '/XMLNodeTypeFilter.php';
require $xmlReaderIterator_libPath . '/XMLAttributeFilterBase.php';
require $xmlReaderIterator_libPath . '/XMLAttributeFilter.php';
require $xmlReaderIterator_libPath . '/XMLAttributePreg.php';
require $xmlReaderIterator_libPath . '/XMLElementXpathFilter.php';
