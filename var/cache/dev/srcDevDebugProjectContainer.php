<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJXDcmKO\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJXDcmKO/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerJXDcmKO.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerJXDcmKO\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerJXDcmKO\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'JXDcmKO',
    'container.build_id' => '090e7221',
    'container.build_time' => 1528040298,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerJXDcmKO');
