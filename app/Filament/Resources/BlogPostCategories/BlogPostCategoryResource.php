<?php

namespace App\Filament\Resources\BlogPostCategories;

use App\Filament\Resources\BlogPostCategories\Pages\CreateBlogPostCategory;
use App\Filament\Resources\BlogPostCategories\Pages\EditBlogPostCategory;
use App\Filament\Resources\BlogPostCategories\Pages\ListBlogPostCategories;
use App\Filament\Resources\BlogPostCategories\Schemas\BlogPostCategoryForm;
use App\Filament\Resources\BlogPostCategories\Tables\BlogPostCategoriesTable;
use App\Models\Admin\BlogPostCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BlogPostCategoryResource extends Resource
{
    protected static ?string $model = BlogPostCategory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return BlogPostCategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BlogPostCategoriesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListBlogPostCategories::route('/'),
            'create' => CreateBlogPostCategory::route('/create'),
            'edit' => EditBlogPostCategory::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
