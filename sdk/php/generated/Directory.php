<?php

/**
 * This class has been generated by dagger-php-sdk. DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dagger;

/**
 * A directory.
 */
class Directory extends Client\AbstractObject implements Client\IdAble
{
    /**
     * Load the directory as a Dagger module
     */
    public function asModule(?string $sourceRootPath = '.'): Module
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('asModule');
        if (null !== $sourceRootPath) {
        $innerQueryBuilder->setArgument('sourceRootPath', $sourceRootPath);
        }
        return new \Dagger\Module($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Gets the difference between this directory and an another directory.
     */
    public function diff(DirectoryId|Directory $other): Directory
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('diff');
        $innerQueryBuilder->setArgument('other', $other);
        return new \Dagger\Directory($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Retrieves a directory at the given path.
     */
    public function directory(string $path): Directory
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('directory');
        $innerQueryBuilder->setArgument('path', $path);
        return new \Dagger\Directory($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Builds a new Docker container from this directory.
     */
    public function dockerBuild(
        ?Platform $platform = null,
        ?string $dockerfile = 'Dockerfile',
        ?string $target = '',
        ?array $buildArgs = null,
        ?array $secrets = null,
    ): Container
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('dockerBuild');
        if (null !== $platform) {
        $innerQueryBuilder->setArgument('platform', $platform);
        }
        if (null !== $dockerfile) {
        $innerQueryBuilder->setArgument('dockerfile', $dockerfile);
        }
        if (null !== $target) {
        $innerQueryBuilder->setArgument('target', $target);
        }
        if (null !== $buildArgs) {
        $innerQueryBuilder->setArgument('buildArgs', $buildArgs);
        }
        if (null !== $secrets) {
        $innerQueryBuilder->setArgument('secrets', $secrets);
        }
        return new \Dagger\Container($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Returns a list of files and directories at the given path.
     */
    public function entries(?string $path = null): array
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('entries');
        if (null !== $path) {
        $leafQueryBuilder->setArgument('path', $path);
        }
        return (array)$this->queryLeaf($leafQueryBuilder, 'entries');
    }

    /**
     * Writes the contents of the directory to a path on the host.
     */
    public function export(string $path, ?bool $wipe = false): bool
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('export');
        $leafQueryBuilder->setArgument('path', $path);
        if (null !== $wipe) {
        $leafQueryBuilder->setArgument('wipe', $wipe);
        }
        return (bool)$this->queryLeaf($leafQueryBuilder, 'export');
    }

    /**
     * Retrieves a file at the given path.
     */
    public function file(string $path): File
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('file');
        $innerQueryBuilder->setArgument('path', $path);
        return new \Dagger\File($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Returns a list of files and directories that matche the given pattern.
     */
    public function glob(string $pattern): array
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('glob');
        $leafQueryBuilder->setArgument('pattern', $pattern);
        return (array)$this->queryLeaf($leafQueryBuilder, 'glob');
    }

    /**
     * A unique identifier for this Directory.
     */
    public function id(): DirectoryId
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('id');
        return new \Dagger\DirectoryId((string)$this->queryLeaf($leafQueryBuilder, 'id'));
    }

    /**
     * Creates a named sub-pipeline.
     */
    public function pipeline(string $name, ?string $description = '', ?array $labels = null): Directory
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('pipeline');
        $innerQueryBuilder->setArgument('name', $name);
        if (null !== $description) {
        $innerQueryBuilder->setArgument('description', $description);
        }
        if (null !== $labels) {
        $innerQueryBuilder->setArgument('labels', $labels);
        }
        return new \Dagger\Directory($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Force evaluation in the engine.
     */
    public function sync(): DirectoryId
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('sync');
        return new \Dagger\DirectoryId((string)$this->queryLeaf($leafQueryBuilder, 'sync'));
    }

    /**
     * Retrieves this directory plus a directory written at the given path.
     */
    public function withDirectory(
        string $path,
        DirectoryId|Directory $directory,
        ?array $exclude = null,
        ?array $include = null,
    ): Directory
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('withDirectory');
        $innerQueryBuilder->setArgument('path', $path);
        $innerQueryBuilder->setArgument('directory', $directory);
        if (null !== $exclude) {
        $innerQueryBuilder->setArgument('exclude', $exclude);
        }
        if (null !== $include) {
        $innerQueryBuilder->setArgument('include', $include);
        }
        return new \Dagger\Directory($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Retrieves this directory plus the contents of the given file copied to the given path.
     */
    public function withFile(string $path, FileId|File $source, ?int $permissions = null): Directory
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('withFile');
        $innerQueryBuilder->setArgument('path', $path);
        $innerQueryBuilder->setArgument('source', $source);
        if (null !== $permissions) {
        $innerQueryBuilder->setArgument('permissions', $permissions);
        }
        return new \Dagger\Directory($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Retrieves this directory plus the contents of the given files copied to the given path.
     */
    public function withFiles(string $path, array $sources, ?int $permissions = null): Directory
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('withFiles');
        $innerQueryBuilder->setArgument('path', $path);
        $innerQueryBuilder->setArgument('sources', $sources);
        if (null !== $permissions) {
        $innerQueryBuilder->setArgument('permissions', $permissions);
        }
        return new \Dagger\Directory($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Retrieves this directory plus a new directory created at the given path.
     */
    public function withNewDirectory(string $path, ?int $permissions = 420): Directory
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('withNewDirectory');
        $innerQueryBuilder->setArgument('path', $path);
        if (null !== $permissions) {
        $innerQueryBuilder->setArgument('permissions', $permissions);
        }
        return new \Dagger\Directory($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Retrieves this directory plus a new file written at the given path.
     */
    public function withNewFile(string $path, string $contents, ?int $permissions = 420): Directory
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('withNewFile');
        $innerQueryBuilder->setArgument('path', $path);
        $innerQueryBuilder->setArgument('contents', $contents);
        if (null !== $permissions) {
        $innerQueryBuilder->setArgument('permissions', $permissions);
        }
        return new \Dagger\Directory($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Retrieves this directory with all file/dir timestamps set to the given time.
     */
    public function withTimestamps(int $timestamp): Directory
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('withTimestamps');
        $innerQueryBuilder->setArgument('timestamp', $timestamp);
        return new \Dagger\Directory($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Retrieves this directory with the directory at the given path removed.
     */
    public function withoutDirectory(string $path): Directory
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('withoutDirectory');
        $innerQueryBuilder->setArgument('path', $path);
        return new \Dagger\Directory($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Retrieves this directory with the file at the given path removed.
     */
    public function withoutFile(string $path): Directory
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('withoutFile');
        $innerQueryBuilder->setArgument('path', $path);
        return new \Dagger\Directory($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }
}
