<?php

namespace MVCSkeleton\Control\Controller;

abstract class Renderer
{
    public function render(string $template, array $data): string
    {
        extract($data);
        ob_start();
        require __DIR__ . '/../../view/' . $template;
        $html = ob_get_clean();
        return $html;
    }
}