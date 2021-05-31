<select {{$attributes->merge(['class' =>'rounded-md shadow-sm p-1 border border-gray-300
focus:outline-none focus:border-yellow-500 focus:ring-4 focus:ring-yellow-500 focus:ring-opacity-50'])}}>
    <option value="">
        {{$default}}
    </option>
    {{$slot}}
</select>