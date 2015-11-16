@extends('admin.admin_template')
@section('content')
 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Author</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Author</th>
            </tr>
        </tfoot>
        <tbody>
          @foreach ($articles as $article)

            <tr>
                <td>{!! $article->title !!}</td>
                <td>{!! $article->content !!}</td>
                <td>{!! $article->author !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    </div>
    @stop