<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCDs0j7S\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCDs0j7S/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCDs0j7S.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCDs0j7S\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCDs0j7S\App_KernelDevDebugContainer([
    'container.build_hash' => 'CDs0j7S',
    'container.build_id' => '08d0d616',
    'container.build_time' => 1663411189,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCDs0j7S');