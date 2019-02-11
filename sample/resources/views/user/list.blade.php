@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if(!empty($users))
            <div class="card">
                <div class="card-header">ユーザ一覧</div>

                @foreach ($users as $user)

                <div class="card-body">
                    {{ $user->name }}

                    <div style="float:right">
                        

                        @if (count($user->follows) == 0)
                        

                        <form method="POST" action="/users/follow" accept-charset="UTF-8" id="formTweet" enctype="multipart/form-data"><input name="_token" type="hidden" value="SVi4OQVIUrtk4HpuOth11VWTY5WdtrQYmcp090Ta"> <input id="followId" name="followId" type="hidden" value="{{$user->id}}">
                          <button type="submit" class="btn btn-light">フォローする
                          </button>
                          @csrf


                          @else
                            フォロー中
                          @endif


                      </form>




                      <?php
                                // {!! Form::open(['id' => 'formTweet', 'url' => 'users/follow/', 'enctype' => 'multipart/form-data']) !!}
                                //     {{Form::hidden('followId', $user->id, ['id' => 'followId'])}}
                                //     <button type="submit" class="btn btn-light">
                                //         {{ __('フォローする') }}
                                //     </button>
                                // {!! Form::close() !!}
                      ?>
                      



                  </div>
              </div>

              <hr>
              @endforeach
              <?php
              // {{ $users->links() }}
              ?>

          </div>
          @endif

      </div>
  </div>
</div>
@endsection
