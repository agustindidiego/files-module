<?php namespace Anomaly\FilesModule\Folder;

use Anomaly\FilesModule\Folder\Contract\FolderInterface;
use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;
use Anomaly\Streams\Platform\Entry\EntryObserver;

/**
 * Class FolderObserver
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\FilesModule\Folder
 */
class FolderObserver extends EntryObserver
{

    /**
     * Fired after a folder is deleted.
     *
     * @param EntryInterface|FolderInterface $entry
     */
    public function deleted(EntryInterface $entry)
    {
        parent::deleted($entry);
    }
}
