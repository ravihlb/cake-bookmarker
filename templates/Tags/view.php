<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tag $tag
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tag'), ['action' => 'edit', $tag->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tag'), ['action' => 'delete', $tag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tags'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tag'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tags view content">
            <h3><?= h($tag->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($tag->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tag->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($tag->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($tag->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Bookmark Tags') ?></h4>
                <?php if (!empty($tag->bookmark_tags)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Bookmark Id') ?></th>
                            <th><?= __('Tag Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($tag->bookmark_tags as $bookmarkTags) : ?>
                        <tr>
                            <td><?= h($bookmarkTags->bookmark_id) ?></td>
                            <td><?= h($bookmarkTags->tag_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'BookmarkTags', 'action' => 'view', $bookmarkTags->bookmark_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'BookmarkTags', 'action' => 'edit', $bookmarkTags->bookmark_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'BookmarkTags', 'action' => 'delete', $bookmarkTags->bookmark_id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookmarkTags->bookmark_id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
