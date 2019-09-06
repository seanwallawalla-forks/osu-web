{{--
    Copyright (c) ppy Pty Ltd <contact@ppy.sh>.

    This file is part of osu!web. osu!web is distributed with the hope of
    attracting more community contributions to the core ecosystem of osu!.

    osu!web is free software: you can redistribute it and/or modify
    it under the terms of the Affero GNU General Public License version 3
    as published by the Free Software Foundation.

    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
    See the GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
--}}
<?php
    if (!isset($options['deleteLink'])) { $options['deleteLink'] = false; }
    if (!isset($options['editLink'])) { $options['editLink'] = false; }
    if (!isset($options['signature'])) { $options['signature'] = true; }
    if (!isset($options['replyLink'])) { $options['replyLink'] = false; }
    if (!isset($options['postPosition'])) { $options['postPosition'] = 1; }
?>
<div
    class="js-forum-post {{ $post->trashed() ? 'js-forum-post--hidden' : '' }} forum-post"
    data-post-id="{{ $post->getKey() }}"
    data-post-position="{{ $options["postPosition"] }}"
>
    @include("forum.topics._post_info", ["user" => $post->userNormalized()])

    <div class="forum-post__body js-forum-post-edit--container">
        <div class="forum-post__content forum-post__content--header">
            @if (isset($topic) && $topic->topic_poster === $post->poster_id)
                <span class="forum-user-badge forum-user-badge--inline">
                    {{ trans('forum.post.info.topic_starter') }}
                </span>
            @endif

            <a class="link link--default js-post-url" rel="nofollow" href="{{ $post->exists ? route('forum.posts.show', $post->post_id) : '#' }}">
                {!! trans("forum.post.posted_at", ["when" => timeago($post->post_time)]) !!}
            </a>
        </div>

        <div class="forum-post__content forum-post__content--main">
            <div class="forum-post-content {{ $options['contentExtraClasses'] ?? '' }}">
                {!! $post->bodyHTML() !!}
            </div>
        </div>

        @if($post->post_edit_count > 0)
            <div class="forum-post__content forum-post__content--footer">
                {!!
                    trans('forum.post.edited', [
                        'count' => $post->post_edit_count,
                        'user' => link_to_user($post->lastEditorNormalized(), null, '', ['link link--default']),
                        'when' => timeago($post->post_edit_time),
                    ])
                !!}
            </div>
        @endif

        @if($options["signature"] !== false && present($post->userNormalized()->user_sig))
            <div class="forum-post__content forum-post__content--signature hidden-xs">
                {!! bbcode($post->userNormalized()->user_sig, $post->userNormalized()->user_sig_bbcode_uid) !!}
            </div>
        @endif

        <div class="forum-post__actions">
            <div class="forum-post-actions">
                @if ($options['editLink'] === true)
                    <div class="forum-post-actions__action">
                        <button
                            type="button"
                            class="btn-circle js-edit-post-start"
                            title="{{ trans('forum.post.actions.edit') }}"
                            data-tooltip-position="top center"
                            data-url="{{ route('forum.posts.edit', $post) }}"
                            data-remote="1"
                        >
                            <span class="btn-circle__content">
                                <i class="fas fa-pencil-alt"></i>
                            </span>
                        </button>
                    </div>
                @endif

                @if ($options["deleteLink"] === true)
                    <div class="forum-post-actions__action js-post-delete-toggle">
                        @include('forum.topics._post_hide_action')
                    </div>
                @endif

                @if ($options['replyLink'] === true)
                    <div class="forum-post-actions__action">
                        <button
                            type="button"
                            class="btn-circle js-forum-topic-reply--quote"
                            title="{{ trans('forum.topics.actions.reply_with_quote') }}"
                            data-tooltip-position="top center"
                            data-url="{{ route('forum.posts.raw', ['id' => $post, 'quote' => 1]) }}"
                            data-remote="1"
                        >
                            <span class="btn-circle__content">
                                <i class="fas fa-reply"></i>
                            </span>
                        </button>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
