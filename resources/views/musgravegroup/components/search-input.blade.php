<form action="{{ route('search.results') }}" method="POST" class="searchandfilter" autocomplete="off">
    @csrf
    <ul>
        <li class="sf-field-category" data-sf-field-name="_sft_category" data-sf-field-type="category">
            <ul>
                <li class="sf-level-0 sf-item-0 sf-option-active">
                    <input class="sf-input-radio" type="radio" value="" name="_sft_category" checked="checked" id="sf-input-all">
                    <label class="sf-label-radio" for="sf-input-all">All</label>
                </li>
                <li class="sf-level-0 sf-item-7">
                    <input class="sf-input-radio" type="radio" value="careers" name="_sft_category" id="sf-input-careers">
                    <label class="sf-label-radio" for="sf-input-careers">Careers</label>
                </li>
                <li class="sf-level-0 sf-item-71">
                    <input class="sf-input-radio" type="radio" value="food-leadership" name="_sft_category" id="sf-input-food-leadership">
                    <label class="sf-label-radio" for="sf-input-food-leadership">Food Leadership</label>
                </li>
                <li class="sf-level-0 sf-item-139">
                    <input class="sf-input-radio" type="radio" value="group-news" name="_sft_category" id="sf-input-group-news">
                    <label class="sf-label-radio" for="sf-input-group-news">Group News</label>
                </li>
                <li class="sf-level-0 sf-item-6">
                    <input class="sf-input-radio" type="radio" value="brands" name="_sft_category" id="sf-input-brands">
                    <label class="sf-label-radio" for="sf-input-brands">Our Brands</label>
                </li>
                <li class="sf-level-0 sf-item-8">
                    <input class="sf-input-radio" type="radio" value="partnerships" name="_sft_category" id="sf-input-partnerships">
                    <label class="sf-label-radio" for="sf-input-partnerships">Retail Partners</label>
                </li>
                <li class="sf-level-0 sf-item-9">
                    <input class="sf-input-radio" type="radio" value="sustainability" name="_sft_category" id="sf-input-sustainability">
                    <label class="sf-label-radio" for="sf-input-sustainability">Sustainability</label>
                </li>
            </ul>
        </li>
        <li class="sf-field-search" data-sf-field-name="search" data-sf-field-type="search">
            <label>
                <input placeholder="Search ..." name="_sf_search[]" class="sf-input-text" type="text" value="" title="">
            </label>
        </li>
        <li class="sf-field-submit" data-sf-field-name="submit" data-sf-field-type="submit">
            <input type="submit" name="_sf_submit" value="Search">
        </li>
    </ul>
</form>

<script>
    document.querySelectorAll('.sf-input-radio').forEach(function(radio) {
        radio.addEventListener('change', function() {
            document.querySelectorAll('.sf-option-active').forEach(function(activeItem) {
                activeItem.classList.remove('sf-option-active');
            });
            this.closest('li').classList.add('sf-option-active');
        });
    });
</script>
