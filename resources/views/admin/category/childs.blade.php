<ol class="dd-list">
    @foreach ($childs as $child)
        <li class="dd-item dd3-item {{ isset($cat) && $cat->id == $child->id ? 'active' : '' }}" data-id="{{ $child->id }}">
            <div class="dd-handle dd3-handle">
            <svg>
                    <use href="{{asset('assets/svg/icon-sprite.svg#arrow-four')}}"></use>
                </svg>Drag</div>
            <div class="dd3-content">{{ $child->name }}
                <form method="POST" action="{{ route('admin.category.destroy', $child->id) }}">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">

                    <a href="#confirmationModal{{ $child->id }}" data-bs-toggle="modal" class="delete-svg">
                        <i data-feather="trash-2" class="remove-icon delete-confirmation"></i>
                    </a>

                    <a href="{{ route('admin.category.edit', [$child->id]) }}" class="edit-icon"><i data-feather="edit"></i></a>

                    <div class="modal fade" id="confirmationModal{{ $child->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="confirmationModalLabel{{ $child->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Confirm delete</h5>
                                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h4 class="mb-3">Are you sure want to delete ?</h4>
                                    <p>This Item Will Be Deleted Permanently. You Can Not Undo This Action.</p>
                                </div>
                                <div class="modal-footer">
                                    <form action=" action="{{ route('admin.category.destroy', $child->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-primary" data-bs-dismiss="modal"
                                            type="button">{{ __('Close') }}</button>
                                        <button class="btn btn-danger delete spinner-btn"
                                            type="submit">{{ __('Delete') }}</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </li>
        @if(count($child->childs))
            @include('admin.category.childs', ['childs' => $child->childs])
        @endif
    @endforeach
</ol>
