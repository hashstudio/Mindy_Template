<?php

namespace Mindy\Template;

interface Adapter
{
    /**
     * @param $path
     * @return mixed
     */
    public function isReadable($path);

    /**
     * @param $path
     * @return mixed
     */
    public function lastModified($path);

    /**
     * @param $path
     * @return mixed
     */
    public function getContents($path);
}

