@php

$category = request()->get('category', []);
$status = request()->get('status', []);
@endphp
<form method="GET" action="{{ route('programs') }}" class="mb-4" id="programs-filter">
    <div class="row gy-3">
        <div class="col-sm-6 col-md-3">
            <div class="form-floating">
                <select class="form-select" multiple size="1" name="category[]">
                    <option disabled hidden value="">Изберете категория</option>
                    <option value="1" {{ in_array(1, $category) ? 'selected' : '' }}>Категория 1</option>
                    <option value="2" {{ in_array(2, $category) ? 'selected' : '' }}>Категория 2</option>
                    <option value="3" {{ in_array(3, $category) ? 'selected' : '' }}>Категория 3</option>
                </select>
                <label>
                    Категория
                </label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="form-floating">
                <select class="form-select" name="status[]" multiple size="1">
                    <option selected disabled>Изберете статус</option>
                    <option value="1" {{ in_array(1, $status) ? 'selected' : '' }}>Активни</option>
                    <option value="2" {{ in_array(2, $status) ? 'selected' : '' }}>Предстоящи</option>
                    <option value="3" {{ in_array(3, $status) ? 'selected' : '' }}>Минали</option>
                </select>
                <label>
                    Статус
                </label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="form-floating">
                <input type="date" class="form-control" placeholder="" aria-label="срок от" id="date-from">
                <label for="date-from">
                    От
                </label>

            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="form-floating">
                <input type="date" class="form-control" placeholder="" aria-label="срок до" id="date-to">
                <label for="date-to">
                    До
                </label>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-3">
            <button type="submit" class="btn btn-light btn-sm">
                Филтрирай
            </button>
        </div>
    </div>
</form>