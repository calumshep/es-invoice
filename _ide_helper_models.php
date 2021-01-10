<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace Crater\Models{
/**
 * Crater\Models\Address
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $address_street_1
 * @property string|null $address_street_2
 * @property string|null $city
 * @property string|null $state
 * @property int|null $country_id
 * @property string|null $zip
 * @property string|null $phone
 * @property string|null $fax
 * @property string|null $type
 * @property int|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $company_id
 * @property-read \Crater\Models\Company|null $company
 * @property-read \Crater\Models\Country|null $country
 * @property-read mixed $country_name
 * @property-read \Crater\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address query()
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddressStreet1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddressStreet2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereZip($value)
 */
	class Address extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\Company
 *
 * @property int $id
 * @property string $name
 * @property string|null $logo
 * @property string|null $unique_hash
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Crater\Models\Address|null $address
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\CompanySetting[] $settings
 * @property-read int|null $settings_count
 * @property-read \Crater\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUniqueHash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUpdatedAt($value)
 */
	class Company extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Crater\Models{
/**
 * Crater\Models\CompanySetting
 *
 * @property int $id
 * @property string $option
 * @property string $value
 * @property int|null $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Crater\Models\Company|null $company
 * @method static \Illuminate\Database\Eloquent\Builder|CompanySetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CompanySetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CompanySetting query()
 * @method static \Illuminate\Database\Eloquent\Builder|CompanySetting whereCompany($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanySetting whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanySetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanySetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanySetting whereOption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanySetting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanySetting whereValue($value)
 */
	class CompanySetting extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\Country
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property int $phonecode
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Address[] $address
 * @property-read int|null $address_count
 * @method static \Illuminate\Database\Eloquent\Builder|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country wherePhonecode($value)
 */
	class Country extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\Currency
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string|null $symbol
 * @property int $precision
 * @property string $thousand_separator
 * @property string $decimal_separator
 * @property int $swap_currency_symbol
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency query()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereDecimalSeparator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency wherePrecision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereSwapCurrencySymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereSymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereThousandSeparator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereUpdatedAt($value)
 */
	class Currency extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\CustomField
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $label
 * @property string $model_type
 * @property string $type
 * @property string|null $placeholder
 * @property array|null $options
 * @property int|null $boolean_answer
 * @property string|null $date_answer
 * @property string|null $time_answer
 * @property string|null $string_answer
 * @property int|null $number_answer
 * @property string|null $date_time_answer
 * @property int $is_required
 * @property int $order
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Crater\Models\Company $company
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\CustomFieldValue[] $customFieldValue
 * @property-read int|null $custom_field_value_count
 * @property-read mixed $default_answer
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField applyFilters($filters)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField paginateData($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField query()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereBooleanAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereCompany($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereDateAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereDateTimeAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereIsRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereNumberAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField wherePlaceholder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereSearch($search)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereStringAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereTimeAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereUpdatedAt($value)
 */
	class CustomField extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\CustomFieldValue
 *
 * @property int $id
 * @property string $custom_field_valuable_type
 * @property int $custom_field_valuable_id
 * @property string $type
 * @property int|null $boolean_answer
 * @property string|null $date_answer
 * @property string|null $time_answer
 * @property string|null $string_answer
 * @property int|null $number_answer
 * @property string|null $date_time_answer
 * @property int $custom_field_id
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Crater\Models\Company $company
 * @property-read \Crater\Models\CustomField $customField
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $customFieldValuable
 * @property-read mixed $default_answer
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue query()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereBooleanAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereCustomFieldId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereCustomFieldValuableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereCustomFieldValuableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereDateAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereDateTimeAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereNumberAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereStringAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereTimeAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereUpdatedAt($value)
 */
	class CustomFieldValue extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\EmailLog
 *
 * @property int $id
 * @property string $from
 * @property string $to
 * @property string $subject
 * @property string $body
 * @property string $mailable_type
 * @property string $mailable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $mailable
 * @method static \Illuminate\Database\Eloquent\Builder|EmailLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailLog whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailLog whereFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailLog whereMailableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailLog whereMailableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailLog whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailLog whereTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailLog whereUpdatedAt($value)
 */
	class EmailLog extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\Estimate
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $estimate_date
 * @property \Illuminate\Support\Carbon $expiry_date
 * @property string $estimate_number
 * @property string $status
 * @property string|null $reference_number
 * @property string $tax_per_item
 * @property string $discount_per_item
 * @property string|null $notes
 * @property float|null $discount
 * @property string|null $discount_type
 * @property int|null $discount_val
 * @property int $sub_total
 * @property int $total
 * @property int $tax
 * @property string|null $unique_hash
 * @property int|null $user_id
 * @property int|null $estimate_template_id
 * @property int|null $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $creator_id
 * @property-read \Crater\Models\Company|null $company
 * @property-read \Crater\Models\User|null $creator
 * @property-read \Crater\Models\EstimateTemplate|null $estimateTemplate
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\CustomFieldValue[] $fields
 * @property-read int|null $fields_count
 * @property-read mixed $estimate_num
 * @property-read mixed $estimate_pdf_url
 * @property-read mixed $estimate_prefix
 * @property-read mixed $formatted_estimate_date
 * @property-read mixed $formatted_expiry_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\EstimateItem[] $items
 * @property-read int|null $items_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Tax[] $taxes
 * @property-read int|null $taxes_count
 * @property-read \Crater\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate applyFilters($filters)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate estimatesBetween($start, $end)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate paginateData($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate query()
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereCompany($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereCustomer($customer_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereDiscountPerItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereDiscountVal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereEstimate($estimate_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereEstimateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereEstimateNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereEstimateTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereExpiryDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereOrder($orderByField, $orderBy)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereReferenceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereSearch($search)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereSubTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereTaxPerItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereUniqueHash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereUserId($value)
 */
	class Estimate extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Crater\Models{
/**
 * Crater\Models\EstimateItem
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string $discount_type
 * @property float $quantity
 * @property float|null $discount
 * @property int|null $discount_val
 * @property int $price
 * @property int $tax
 * @property int $total
 * @property int|null $item_id
 * @property int $estimate_id
 * @property int|null $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Crater\Models\Estimate $estimate
 * @property-read \Crater\Models\Item|null $item
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Tax[] $taxes
 * @property-read int|null $taxes_count
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereCompany($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereDiscountVal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereEstimateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereUpdatedAt($value)
 */
	class EstimateItem extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\EstimateTemplate
 *
 * @property int $id
 * @property string|null $name
 * @property string $view
 * @property string $path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Estimate[] $estimates
 * @property-read int|null $estimates_count
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateTemplate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateTemplate wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateTemplate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateTemplate whereView($value)
 */
	class EstimateTemplate extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\Expense
 *
 * @property int $id
 * @property string $expense_date
 * @property string|null $attachment_receipt
 * @property int $amount
 * @property string|null $notes
 * @property int $expense_category_id
 * @property int|null $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $user_id
 * @property int|null $creator_id
 * @property-read \Crater\Models\ExpenseCategory $category
 * @property-read \Crater\Models\User|null $creator
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\CustomFieldValue[] $fields
 * @property-read int|null $fields_count
 * @property-read mixed $formatted_created_at
 * @property-read mixed $formatted_expense_date
 * @property-read mixed $receipt
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Crater\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Expense applyFilters($filters)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense expensesAttributes()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense expensesBetween($start, $end)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense paginateData($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense query()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereAttachmentReceipt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereCategory($categoryId)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereCategoryName($search)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereCompany($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereExpense($expense_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereExpenseCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereExpenseDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereOrder($orderByField, $orderBy)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereSearch($search)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereUser($user_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereUserId($value)
 */
	class Expense extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Crater\Models{
/**
 * Crater\Models\ExpenseCategory
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int|null $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Expense[] $expenses
 * @property-read int|null $expenses_count
 * @property-read mixed $amount
 * @property-read mixed $formatted_created_at
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory applyFilters($filters)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory paginateData($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereCategory($category_id)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereCompany($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereSearch($search)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereUpdatedAt($value)
 */
	class ExpenseCategory extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\FileDisk
 *
 * @property int $id
 * @property string $name
 * @property string $type
 * @property string $driver
 * @property int $set_as_default
 * @property mixed $credentials
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FileDisk applyFilters($filters)
 * @method static \Illuminate\Database\Eloquent\Builder|FileDisk fileDisksBetween($start, $end)
 * @method static \Illuminate\Database\Eloquent\Builder|FileDisk newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FileDisk newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FileDisk paginateData($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|FileDisk query()
 * @method static \Illuminate\Database\Eloquent\Builder|FileDisk whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileDisk whereCredentials($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileDisk whereDriver($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileDisk whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileDisk whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileDisk whereOrder($orderByField, $orderBy)
 * @method static \Illuminate\Database\Eloquent\Builder|FileDisk whereSearch($search)
 * @method static \Illuminate\Database\Eloquent\Builder|FileDisk whereSetAsDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileDisk whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileDisk whereUpdatedAt($value)
 */
	class FileDisk extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\Invoice
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $invoice_date
 * @property \Illuminate\Support\Carbon $due_date
 * @property string $invoice_number
 * @property string|null $reference_number
 * @property string $status
 * @property string $paid_status
 * @property string $tax_per_item
 * @property string $discount_per_item
 * @property string|null $notes
 * @property string|null $discount_type
 * @property float|null $discount
 * @property int|null $discount_val
 * @property int $sub_total
 * @property int $total
 * @property int $tax
 * @property int $due_amount
 * @property int $sent
 * @property int $viewed
 * @property string|null $unique_hash
 * @property int|null $invoice_template_id
 * @property int|null $user_id
 * @property int|null $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $creator_id
 * @property-read \Crater\Models\Company|null $company
 * @property-read \Crater\Models\User|null $creator
 * @property-read \Crater\Models\Currency $currency
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\CustomFieldValue[] $fields
 * @property-read int|null $fields_count
 * @property-read mixed $formatted_created_at
 * @property-read mixed $formatted_due_date
 * @property-read mixed $formatted_invoice_date
 * @property-read mixed $invoice_num
 * @property-read mixed $invoice_pdf_url
 * @property-read mixed $invoice_prefix
 * @property-read \Crater\Models\InvoiceTemplate|null $invoiceTemplate
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\InvoiceItem[] $items
 * @property-read int|null $items_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Payment[] $payments
 * @property-read int|null $payments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Tax[] $taxes
 * @property-read int|null $taxes_count
 * @property-read \Crater\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice applyFilters($filters)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice invoicesBetween($start, $end)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice paginateData($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice query()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereCompany($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereCustomer($customer_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereDiscountPerItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereDiscountVal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereDueAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereDueStatus($status)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereInvoice($invoice_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereInvoiceDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereInvoiceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereInvoiceTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereOrder($orderByField, $orderBy)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice wherePaidStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereReferenceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereSearch($search)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereSent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereSubTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereTaxPerItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereUniqueHash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereViewed($value)
 */
	class Invoice extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Crater\Models{
/**
 * Crater\Models\InvoiceItem
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string $discount_type
 * @property int $price
 * @property float $quantity
 * @property float|null $discount
 * @property int $discount_val
 * @property int $tax
 * @property int $total
 * @property int $invoice_id
 * @property int|null $item_id
 * @property int|null $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Crater\Models\Invoice $invoice
 * @property-read \Crater\Models\Item|null $item
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Tax[] $taxes
 * @property-read int|null $taxes_count
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem applyInvoiceFilters($filters)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem invoicesBetween($start, $end)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem itemAttributes()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereCompany($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereDiscountVal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereUpdatedAt($value)
 */
	class InvoiceItem extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\InvoiceTemplate
 *
 * @property int $id
 * @property string|null $name
 * @property string $view
 * @property string $path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Invoice[] $invoices
 * @property-read int|null $invoices_count
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceTemplate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceTemplate wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceTemplate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceTemplate whereView($value)
 */
	class InvoiceTemplate extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\Item
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property \Crater\Models\Unit|null $unit
 * @property int $price
 * @property int|null $company_id
 * @property int|null $unit_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $creator_id
 * @property-read \Crater\Models\User|null $creator
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\EstimateItem[] $estimateItems
 * @property-read int|null $estimate_items_count
 * @property-read mixed $formatted_created_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\InvoiceItem[] $invoiceItems
 * @property-read int|null $invoice_items_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Tax[] $taxes
 * @property-read int|null $taxes_count
 * @method static \Illuminate\Database\Eloquent\Builder|Item applyFilters($filters)
 * @method static \Illuminate\Database\Eloquent\Builder|Item newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Item newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Item paginateData($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|Item query()
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereCompany($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereItem($item_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereOrder($orderByField, $orderBy)
 * @method static \Illuminate\Database\Eloquent\Builder|Item wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereSearch($search)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereUnitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereUpdatedAt($value)
 */
	class Item extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\Note
 *
 * @property int $id
 * @property string $type
 * @property string $name
 * @property string $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Note applyFilters($filters)
 * @method static \Illuminate\Database\Eloquent\Builder|Note newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Note newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Note query()
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereSearch($search)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereUpdatedAt($value)
 */
	class Note extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\Payment
 *
 * @property int $id
 * @property string $payment_number
 * @property \Illuminate\Support\Carbon $payment_date
 * @property string|null $notes
 * @property int $amount
 * @property string|null $unique_hash
 * @property int $user_id
 * @property int|null $invoice_id
 * @property int|null $company_id
 * @property int|null $payment_method_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $creator_id
 * @property-read \Crater\Models\Company|null $company
 * @property-read \Crater\Models\User|null $creator
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\CustomFieldValue[] $fields
 * @property-read int|null $fields_count
 * @property-read mixed $formatted_created_at
 * @property-read mixed $formatted_payment_date
 * @property-read mixed $payment_num
 * @property-read mixed $payment_pdf_url
 * @property-read mixed $payment_prefix
 * @property-read \Crater\Models\Invoice|null $invoice
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Crater\Models\PaymentMethod|null $paymentMethod
 * @property-read \Crater\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Payment applyFilters($filters)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment paginateData($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment paymentMethod($paymentMethodId)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment paymentNumber($paymentNumber)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCompany($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCustomer($customer_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereOrder($orderByField, $orderBy)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePayment($payment_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereSearch($search)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUniqueHash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUserId($value)
 */
	class Payment extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Crater\Models{
/**
 * Crater\Models\PaymentMethod
 *
 * @property int $id
 * @property string $name
 * @property int|null $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Crater\Models\Company|null $company
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Payment[] $payments
 * @property-read int|null $payments_count
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod applyFilters($filters)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod paginateData($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereCompany($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod wherePaymentMethod($payment_id)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereSearch($search)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereUpdatedAt($value)
 */
	class PaymentMethod extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\Setting
 *
 * @property int $id
 * @property string $option
 * @property string $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereOption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereValue($value)
 */
	class Setting extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\Tax
 *
 * @property int $id
 * @property int $tax_type_id
 * @property int|null $invoice_id
 * @property int|null $estimate_id
 * @property int|null $invoice_item_id
 * @property int|null $estimate_item_id
 * @property int|null $item_id
 * @property int|null $company_id
 * @property string $name
 * @property int $amount
 * @property float $percent
 * @property int $compound_tax
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Crater\Models\Estimate|null $estimate
 * @property-read \Crater\Models\EstimateItem|null $estimateItem
 * @property-read \Crater\Models\Invoice|null $invoice
 * @property-read \Crater\Models\InvoiceItem|null $invoiceItem
 * @property-read \Crater\Models\Item|null $item
 * @property-read \Crater\Models\TaxType $taxType
 * @method static \Illuminate\Database\Eloquent\Builder|Tax invoicesBetween($start, $end)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tax newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tax query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tax taxAttributes()
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereCompany($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereCompoundTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereEstimateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereEstimateItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereInvoiceItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereInvoicesFilters($filters)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax wherePercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereTaxTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereUpdatedAt($value)
 */
	class Tax extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\TaxType
 *
 * @property int $id
 * @property string $name
 * @property float $percent
 * @property int $compound_tax
 * @property int $collective_tax
 * @property string|null $description
 * @property int|null $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Tax[] $taxes
 * @property-read int|null $taxes_count
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType applyFilters($filters)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType paginateData($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType query()
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType whereCollectiveTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType whereCompany($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType whereCompoundTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType whereOrder($orderByField, $orderBy)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType wherePercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType whereSearch($search)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType whereTaxType($tax_type_id)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType whereUpdatedAt($value)
 */
	class TaxType extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\Unit
 *
 * @property int $id
 * @property string $name
 * @property int|null $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Crater\Models\Company|null $company
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Item[] $items
 * @property-read int|null $items_count
 * @method static \Illuminate\Database\Eloquent\Builder|Unit applyFilters($filters)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit paginateData($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereCompany($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereUnit($unit_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereUpdatedAt($value)
 */
	class Unit extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $password
 * @property string $role
 * @property string|null $remember_token
 * @property string|null $facebook_id
 * @property string|null $google_id
 * @property string|null $github_id
 * @property string|null $contact_name
 * @property string|null $company_name
 * @property string|null $website
 * @property int|null $enable_portal
 * @property int|null $currency_id
 * @property int|null $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $creator_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Address[] $addresses
 * @property-read int|null $addresses_count
 * @property-read \Crater\Models\Address|null $billingAddress
 * @property-read \Crater\Models\Company|null $company
 * @property-read User|null $creator
 * @property-read \Crater\Models\Currency|null $currency
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Estimate[] $estimates
 * @property-read int|null $estimates_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Expense[] $expenses
 * @property-read int|null $expenses_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\CustomFieldValue[] $fields
 * @property-read int|null $fields_count
 * @property-read mixed $avatar
 * @property-read mixed $formatted_created_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Invoice[] $invoices
 * @property-read int|null $invoices_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Payment[] $payments
 * @property-read int|null $payments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\UserSetting[] $settings
 * @property-read int|null $settings_count
 * @property-read \Crater\Models\Address|null $shippingAddress
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|User applyFilters($filters)
 * @method static \Illuminate\Database\Eloquent\Builder|User applyInvoiceFilters($filters)
 * @method static \Illuminate\Database\Eloquent\Builder|User customer()
 * @method static \Illuminate\Database\Eloquent\Builder|User invoicesBetween($start, $end)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User paginateData($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCompany($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereContactName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCurrencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCustomer($customer_id)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDisplayName($displayName)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEnablePortal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFacebookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGithubId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGoogleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereOrder($orderByField, $orderBy)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSearch($search)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereWebsite($value)
 */
	class User extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Crater\Models{
/**
 * Crater\Models\UserSetting
 *
 * @property int $id
 * @property string $key
 * @property string $value
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Crater\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting whereValue($value)
 */
	class UserSetting extends \Eloquent {}
}

