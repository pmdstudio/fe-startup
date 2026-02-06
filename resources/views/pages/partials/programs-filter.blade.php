@php

$category = request()->get('category', []);
$status = request()->get('status', []);
$dateFrom = request()->get('date_from', '');
$dateTo = request()->get('date_to', '');
@endphp
<form method="GET" action="{{ route('programs') }}" class="mb-5 mb-md-0" id="programs-filter">
    <div class="row gy-3">
        <div class="col-sm-6 col-md-3 position-relative">
            <label>
                Категория
            </label>

            <select class="form-select" multiple size="1" name="category[]" data-placeholder-class="text-secondary">
                <option value="" hidden>Изберете категория</option>
                <option value="1" {{ in_array(1, $category) ? 'selected' : '' }} class="text-primary">Категория 1</option>
                <option value="2" {{ in_array(2, $category) ? 'selected' : '' }} class="text-primary">Категория 2</option>
                <option value="3" {{ in_array(3, $category) ? 'selected' : '' }} class="text-primary">Категория 3</option>
            </select>

        </div>
        <div class="col-sm-6 col-md-3">
            <label>
                Статус
            </label>
            <select class="form-select" name="status[]" multiple size="1" data-placeholder-class="text-secondary">
                <option value="" hidden>Изберете статус</option>
                <option value="1" {{ in_array(1, $status) ? 'selected' : '' }} class="text-primary">Активни</option>
                <option value="2" {{ in_array(2, $status) ? 'selected' : '' }} class="text-primary">Предстоящи</option>
                <option value="3" {{ in_array(3, $status) ? 'selected' : '' }} class="text-primary">Минали</option>
            </select>


        </div>
        <div class="col-sm-6 col-md-3">
            <label for="date-from">
                От
            </label>
            <input type="date" name="date_from" class="form-control" value="{{ $dateFrom }}" aria-label="срок от" id="date-from">
        </div>
        <div class="col-sm-6 col-md-3">
            <label for="date-to">
                До
            </label>
            <input type="date" name="date_to" class="form-control" value="{{ $dateTo }}" aria-label="срок до" id="date-to">
        </div>
    </div>
    <div class="row position-absolute">
        <div class="col-12 mt-3">
            <button type="submit" class="btn btn-light btn-sm">
                Филтрирай
            </button>
        </div>
    </div>
</form>