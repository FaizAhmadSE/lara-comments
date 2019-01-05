<?php

namespace tizis\laraComments\Http;

use tizis\laraComments\Http\Resources\CommentResource;
use tizis\laraComments\UseCases\CommentService;

class CommentsHelper
{
    public static function getNewestComments($take = 10, $commentable_type = null)
    {
        return CommentResource::collection(CommentService::getNewestComments($take, $commentable_type));
    }
}