<?php
/**
 * Created by PhpStorm.
 * User: SonNguyen
 */


return [
    'nextActive' => '<li class="next btn-group btn-group-solid"><a rel="next" class="btn btn-circle dark" href="{{url}}">Next →</a></li>',
    'nextDisabled' => '<li class="next disabled btn-group btn-group-solid"><a rel="next" class="btn btn-circle dark" href="javascript:void(0)">Next →</a></li>',
    'prevActive' => '<li class="prev btn-group btn-group-solid"><a rel="prev" class="btn btn-circle dark" href="{{url}}">← Prev</a></li>',
    'prevDisabled' => '<li class="prev disabled btn-group btn-group-solid"><a rel="prev" class="btn btn-circle dark" href="javascript:void(0)">← Prev</a></li>',
    'counterRange' => '{{start}} - {{end}} of {{count}}',
    'counterPages' => '{{page}} of {{pages}}',
    'first' => '<li class="first btn-group btn-group-solid"><a href="{{url}}" class="btn btn-circle dark">{{text}}</a></li>',
    'last' => '<li class="last btn-group btn-group-solid"><a href="{{url}}" class="btn btn-circle dark">{{text}}</a></li>',
    'number' => '<li class="btn-group btn-group-solid"><a href="{{url}}" class="btn btn-circle dark">{{text}}</a></li>',
    'current' => '<li class="active btn-group btn-group-solid"><a href="javascript:void(0)" class="btn btn-circle green">{{text}}</a></li>',
    'ellipsis' => '<li class="ellipsis btn-group btn-group-solid">...</li>',
];