@props([
    'orders' => $orders,
])

<div class="account-orders">
    <div class="wrap-account-order">
        <table>
            <thead>
                <tr>
                    <th class="fw-6">Order</th>
                    <th class="fw-6">Date</th>
                    <th class="fw-6">Status</th>
                    <th class="fw-6">Total</th>
                    <th class="fw-6">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr class="tf-order-item">
                        <td>
                            {{ $order?->order_number }}
                        </td>
                        <td>
                            {{ date('d M Y', strtotime($order?->created_at)) }}
                        </td>
                        <td>
                            {{ $order?->status }}
                        </td>
                        <td>
                            {{ $order?->total_price }}

                        </td>
                        <td>
                            <a href="{{ url('customer/orders', ['order' => $order?->id]) }}"
                                class="tf-btn btn-fill radius-4">
                                <span class="text">View</span>
                            </a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</div>


<style>
    .wrap-account-order tbody {
        font-size: 12px
    }
</style>
