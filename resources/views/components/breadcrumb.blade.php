<div class="breadcrumb">
        <a href="/" class="inactive">Accueil</a>  
       <?php $link = "" ?>
       @for($i = 1; $i <= count(Request::segments()); $i++)
           @if($i < count(Request::segments()) & $i > 0)
               <?php $link .= "/" . Request::segment($i); ?>
               @if ($i == 1)
                   <a href="<?= $link ?>" class="inactive">/ {{ ucwords(str_replace('-',' ',Request::segment($i)))}}</a>
               @else
                   <a href="<?= $link ?>" class="inactive">{{ ucwords(str_replace('-',' ',Request::segment($i)))}}</a>
               @endif
           @else
               <a class="active">/ {{ucwords(str_replace('-',' ',Request::segment($i)))}}</a>
           @endif
       @endfor
</div>