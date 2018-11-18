<div>
    <ul class="list-inline">
        <li class="list-inline-item"><i class="fa fa-star{{ $course->custom_rating >= 1 ? ' yellow' : '' }}"></i></li>
        <li class="list-inline-item"><i class="fa fa-star{{ $course->rating >= 2 ? ' yellow' : '' }}"></i></li>
        <li class="list-inline-item"><i class="fa fa-star{{ $course->rating >= 3 ? ' yellow' : '' }}"></i></li>
        <li class="list-inline-item"><i class="fa fa-star{{ $course->custom_rating >= 4 ? ' yellow' : '' }}"></i></li>
        <li class="list-inline-item"><i class="fa fa-star{{ $course->rating >= 5 ? ' yellow' : '' }}"></i></li>
    </ul>
</div>
{{-- depende de si he creado el metdo getRatingAttribute o getCustomRatingAttribute en el modelo Course
    uso las lineas 1 y 4 o el resto. Se traa de elegir uno y dejarlo todo igual.
--}}