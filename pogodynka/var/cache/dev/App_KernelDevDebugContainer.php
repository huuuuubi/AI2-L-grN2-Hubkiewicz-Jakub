<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerG28Gz7x\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerG28Gz7x/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerG28Gz7x.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerG28Gz7x\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerG28Gz7x\App_KernelDevDebugContainer([
    'container.build_hash' => 'G28Gz7x',
    'container.build_id' => 'd176a8cf',
    'container.build_time' => 1701633891,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerG28Gz7x');
