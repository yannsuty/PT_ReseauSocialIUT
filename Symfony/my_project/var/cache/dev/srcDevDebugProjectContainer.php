<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRNpaFho\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRNpaFho/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerRNpaFho.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerRNpaFho\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerRNpaFho\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'RNpaFho',
    'container.build_id' => '4f263bdc',
    'container.build_time' => 1544710182,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerRNpaFho');
