@extends('layout')

@section('content')

<div class="container w-50 mt-5">
    <div class="row mb-4">
        <div class="col w-50">
            <h2>Homepage</h2>
        </div>
        <div class="col w-50 text-end">
            <a href="{{ route('login.destroy') }}" class="btn btn-danger w-25">Logout</a>
        </div>
    </div>
    <hr>
    <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere sit obcaecati hic nihil. Maiores cum
        voluptate
        necessitatibus in adipisci delectus nostrum labore quae! Nihil natus quaerat architecto magnam eaque asperiores.
        In, dicta qui nesciunt deserunt eveniet vitae amet alias labore eaque dolorem, eius fuga veniam voluptates,
        tempore optio laudantium delectus magnam culpa? Recusandae, est sequi! Nisi veniam asperiores neque suscipit.
        Commodi impedit cum itaque esse, quia cumque nam voluptatibus laborum repellat mollitia ipsa sit voluptate,
        necessitatibus eos consequatur? Assumenda velit placeat laborum eum nulla blanditiis dolores sequi doloremque
        repellendus consequatur?
        Tempora inventore velit maiores nostrum laboriosam, nihil doloremque vero neque officia vitae quibusdam
        reiciendis illum corporis, excepturi ad labore explicabo corrupti totam? Autem est magni quae enim architecto,
        saepe nihil?</p>
</div>


@endsection