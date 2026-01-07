
<div class="card bg-base-100 w-96 shadow-lg">
  <figure>
    <img
      src="{{ $imgSrc ?? 'https://mockimage.tw/photo/320x240/ffffff/000000/No%20Image' }}"
      alt="{{ $imgAlt ?? 'alt' }}"
    />
  </figure>
  <div class="card-body">
    <h2 class="card-title">{{ $title ?? 'Title' }}</h2>
    <p>{{ $content ?? 'Content' }}</p>
    <div class="card-actions justify-end">
      <button class="btn btn-primary">
        {{ $buttonText ?? 'Button' }}
      </button>
    </div>
  </div>
</div>