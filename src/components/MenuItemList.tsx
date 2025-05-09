import { MenuItem } from '../types';

interface MenuItemListProps {
  menu: MenuItem[];
  onAdd: (item: MenuItem) => void;
}

export default function MenuItemList({ menu, onAdd }: MenuItemListProps) {
  return (
    <div className="grid grid-cols-2 gap-4">
      {menu.map((item) => (
        <button
          key={item.id}
          onClick={() => onAdd(item)}
          className="p-4 rounded-xl bg-blue-100 shadow hover:bg-blue-200"
        >
          <h4 className="font-semibold">{item.name}</h4>
          <p>${item.price.toFixed(2)}</p>
        </button>
      ))}
    </div>
  );
}
