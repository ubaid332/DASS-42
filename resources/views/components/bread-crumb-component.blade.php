<div class="breadcrumb-outer">
    <div class="add-record-btn">
        @if ($modal == true)
          <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#{{ $modalId }}"><i class="mdi mdi-plus-circle-outline"></i> Add {{ $modalType }}</button>
        @endif
       
    </div>
    <div class="breadcrumb flat">
        <?php $segments = ''; ?>
        @foreach (Request::segments() as $segment)
            <?php $segments .= '/' . $segment; ?>
            @if($segment == "dashboard")
            <a href="/dashboard" class="{{ $loop->last ? 'active' : '' }}">{{ $segment }}</a>
            @elseif($segment == "video")
            <a href="/dashboard/video" class="{{ $loop->last ? 'active' : '' }}">{{ $segment }}</a>
            @else
           <a href="{{ $segment }}" class="{{ $loop->last ? 'active' : '' }}">{{ $segment }}</a>
           @endif
       
        @endforeach
    </div>
    
</div>