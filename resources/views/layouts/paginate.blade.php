<div class="btn-group mr-2" role="group" aria-label="First group">
    <a  class="btn btn-secondary {{($paginator->currentPage()==1)?' disabled':''}}"
    href="{{$paginator->url($paginator->currentPage()-1)}}"> <
    </a>
    @for($i=1;$i<=$paginator->lastPage(); $i++)
    <a href="{{$paginator->url($i)}}" class="btn btn-secondary {{($paginator->currentPage()==$i)?' active':''}}">{{$i}}</a>
    @endfor
    <a class="btn btn-secondary {{($paginator->currentPage()==$paginator->lastPage())?' disabled':''}}"
    href="{{$paginator->url($paginator->currentPage()+1)}}"  > >
    </a>

</div>
