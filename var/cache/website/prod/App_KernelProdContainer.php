<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQpTHIsG\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQpTHIsG/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerQpTHIsG.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerQpTHIsG\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerQpTHIsG\App_KernelProdContainer([
    'container.build_hash' => 'QpTHIsG',
    'container.build_id' => '7fb015ca',
    'container.build_time' => 1651322105,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQpTHIsG');
