import { Order } from '../types';

interface OrderPanelProps {
  order: Order;
  onRemove: (index: number) => void;
}

export default function OrderPanel({ order, onRemove }: OrderPanelProps) {
  return (
    <div className="space-y-2">
      <h2 className="text-xl font-bold">Current Order</h2>
      {order.items.map((orderItem, index) => (
        <div key={index} className="flex justify-between items-center p-2 border rounded">
          <div>
            {orderItem.item.name} x{orderItem.quantity}
          </div>
          <button
            onClick={() => onRemove(index)}
            className="text-red-500 font-semibold"
          >
            Remove
          </button>
        </div>
      ))}
    </div>
  );
}
