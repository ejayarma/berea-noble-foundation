
<script setup lang="ts">
import { ref, computed, onMounted, onUnmounted } from 'vue'
import VueEasyLightbox from 'vue-easy-lightbox'
import { Button } from '@/components/ui/button';

// Types
interface Photo {
  id: string
  src: string
  alt: string
  title: string
  category: string
}

interface Category {
  key: string
  label: string
}

// Props
interface Props {
  photos?: Photo[]
  initialCategory?: string
}

const props = withDefaults(defineProps<Props>(), {
  photos: () => [],
  initialCategory: 'all'
})

// State
const activeCategory = ref(props.initialCategory)
const lightboxVisible = ref(false)
const lightboxIndex = ref(0)
const isLoading = ref(false)

// Categories
const categories: Category[] = [
  { key: 'all', label: 'All Photos' },
  { key: 'mobile-library', label: 'Mobile Library' },
  { key: 'children-education', label: 'Children & Education' },
  { key: 'community-book-clubs', label: 'Community Book Clubs' },
  { key: 'medical-support', label: 'Medical Support' },
  { key: 'events-outreach', label: 'Events & Outreach' }
]

// Sample data (replace with your actual data source)
const samplePhotos: Photo[] = [
  {
    id: '1',
    src: '/images/gallery/mobile-lib-van.jpeg',
    alt: 'Mobile library van bringing books to rural communities with children gathered around',
    title: 'Mobile library van bringing books to rural communities',
    category: 'mobile-library'
  },
  {
    id: '2',
    src: '/images/gallery/children-excite.jpeg',
    alt: 'Children excited to receive new books from our mobile library',
    title: 'Children excited to receive new books from our mobile library',
    category: 'children-education'
  },
  {
    id: '3',
    src: '/images/gallery/students-engaged.jpeg',
    alt: 'Students engaged in active learning in their classroom',
    title: 'Students engaged in active learning in their classroom',
    category: 'children-education'
  },
  {
    id: '4',
    src: '/images/gallery/medical-volunteers.jpeg',
    alt: 'Medical volunteers providing essential healthcare services',
    title: 'Medical volunteers providing essential healthcare services',
    category: 'medical-support'
  },
  {
    id: '5',
    src: '/images/gallery/weekly-gathering.jpeg',
    alt: 'Weekly community book club gathering and discussion',
    title: 'Weekly community book club gathering and discussion',
    category: 'community-book-clubs'
  },
  {
    id: '6',
    src: '/images/gallery/rural-village.jpeg',
    alt: 'Rural village community gathered for support event',
    title: 'Rural village community gathered for support event',
    category: 'events-outreach'
  }
]

// Use props.photos if provided, otherwise use sample data
const allPhotos = computed(() => props.photos.length > 0 ? props.photos : samplePhotos)

// Computed
const filteredPhotos = computed(() => {
  if (activeCategory.value === 'all') {
    return allPhotos.value
  }
  return allPhotos.value.filter(photo => photo.category === activeCategory.value)
})

const lightboxImages = computed(() => {
  return filteredPhotos.value.map(photo => photo.src)
})

// Methods
const openLightbox = (index: number) => {
  lightboxIndex.value = index
  lightboxVisible.value = true
}

const closeLightbox = () => {
  lightboxVisible.value = false
}

const handleImageError = (event: Event) => {
  const img = event.target as HTMLImageElement
  img.src = '/images/placeholder.jpg' // fallback image
  console.warn(`Failed to load image: ${img.src}`)
}

// Keyboard navigation
const handleKeydown = (event: KeyboardEvent) => {
  if (!lightboxVisible.value) return

  switch (event.key) {
    case 'Escape':
      closeLightbox()
      break
    case 'ArrowLeft':
      if (lightboxIndex.value > 0) {
        lightboxIndex.value--
      }
      break
    case 'ArrowRight':
      if (lightboxIndex.value < filteredPhotos.value.length - 1) {
        lightboxIndex.value++
      }
      break
  }
}

// Lifecycle
onMounted(() => {
  document.addEventListener('keydown', handleKeydown)
})

onUnmounted(() => {
  document.removeEventListener('keydown', handleKeydown)
})

// Expose methods for parent component
defineExpose({
  openCategory: (category: string) => {
    activeCategory.value = category
  },
  openPhoto: (photoId: string) => {
    const index = filteredPhotos.value.findIndex(photo => photo.id === photoId)
    if (index !== -1) {
      openLightbox(index)
    }
  }
})
</script>

<template>
  <section class="py-16 bg-gray-50 lg:px-10">
    <div class="container-primary">
      <!-- Filter Tabs -->
      <div class="flex flex-wrap gap-2 mb-8 justify-center lg:justify-start">
        <Button
          v-for="category in categories"
          :key="category.key"
          @click="activeCategory = category.key"
          :class="[
            'px-6 py-3 rounded-xl text-sm font-medium transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2',
            activeCategory === category.key
              ? 'bg-orange-500 text-white shadow-lg'
              : 'bg-white text-gray-700 hover:bg-gray-100 border border-gray-200'
          ]"
          :aria-pressed="activeCategory === category.key"
          :aria-label="`Filter by ${category.label}`"
        >
          {{ category.label }}
        </Button>
      </div>

      <!-- Gallery Grid -->
      <div
        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"
        role="region"
        aria-label="Photo gallery"
      >
        <article
          v-for="(photo, index) in filteredPhotos"
          :key="photo.id"
          class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 cursor-pointer bg-white"
          @click="openLightbox(index)"
          @keydown.enter="openLightbox(index)"
          @keydown.space.prevent="openLightbox(index)"
          tabindex="0"
          role="button"
          :aria-label="`View full image: ${photo.alt}`"
        >
          <!-- Image Container -->
          <div class="aspect-[4/3] overflow-hidden relative">
            <img
              :src="photo.src"
              :alt="photo.alt"
              :loading="index < 6 ? 'eager' : 'lazy'"
              class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"
              @error="handleImageError"
            />

            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/30 bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex items-end">
              <div class="p-6 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                <h3 class="text-lg font-semibold leading-tight drop-shadow-lg">
                  {{ photo.title }}
                </h3>
              </div>
            </div>

            <!-- Focus Ring -->
            <div class="absolute inset-0 ring-2 ring-orange-500 ring-opacity-0 group-focus-within:ring-opacity-100 transition-all duration-200 rounded-2xl"></div>
          </div>
        </article>
      </div>

      <!-- Empty State -->
      <div
        v-if="filteredPhotos.length === 0"
        class="text-center py-16"
        role="status"
        aria-live="polite"
      >
        <div class="text-gray-400 text-lg mb-2">No photos found</div>
        <p class="text-gray-500">Try selecting a different category</p>
      </div>

      <!-- Loading State -->
      <div
        v-if="isLoading"
        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"
        role="status"
        aria-label="Loading photos"
      >
        <div
          v-for="n in 6"
          :key="n"
          class="aspect-[4/3] bg-gray-200 rounded-2xl animate-pulse"
        ></div>
      </div>
    </div>

    <!-- Lightbox using vue-easy-lightbox -->
    <vue-easy-lightbox
      :visible="lightboxVisible"
      :imgs="lightboxImages"
      :index="lightboxIndex"
      @hide="closeLightbox"
      :moveDisabled="false"
      :rotateDisabled="false"
      :zoomDisabled="false"
      :scrollDisabled="true"
      escDisabled
    >
      <!-- Custom toolbar slot -->
      <template #toolbar="{ toolbarMethods }">
        <div class="vel-toolbar">
          <div class="vel-btn-group">
            <button
              @click="toolbarMethods.zoomIn"
              class="vel-btn"
              aria-label="Zoom in"
              title="Zoom in"
            >
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
              </svg>
            </button>
            <button
              @click="toolbarMethods.zoomOut"
              class="vel-btn"
              aria-label="Zoom out"
              title="Zoom out"
            >
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
              </svg>
            </button>
            <button
              @click="toolbarMethods.rotateLeft"
              class="vel-btn"
              aria-label="Rotate left"
              title="Rotate left"
            >
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
              </svg>
            </button>
          </div>
          <button
            @click="closeLightbox"
            class="vel-btn vel-close-btn ml-4"
            aria-label="Close gallery"
            title="Close (Esc)"
          >
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </button>
        </div>
      </template>

      <!-- Custom navigation arrows -->
      <template #prevBtn>
        <button class="vel-prev-btn" aria-label="Previous image" title="Previous (←)">
          <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
          </svg>
        </button>
      </template>

      <template #nextBtn>
        <button class="vel-next-btn" aria-label="Next image" title="Next (→)">
          <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
          </svg>
        </button>
      </template>
    </vue-easy-lightbox>
  </section>
</template>

<style>
/* Custom lightbox styles */
.vel-modal {
  background-color: rgba(0, 0, 0, 0.9) !important;
}

.vel-toolbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1rem;
  background: rgba(0, 0, 0, 0.7);
  border-radius: 0.5rem;
  margin: 1rem;
}

.vel-btn-group {
  display: flex;
  gap: 0.5rem;
}

.vel-btn {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 2.5rem;
  height: 2.5rem;
  background: rgba(255, 255, 255, 0.1);
  border: 1px solid rgba(255, 255, 255, 0.2);
  border-radius: 0.375rem;
  color: white;
  cursor: pointer;
  transition: all 0.2s ease;
}

.vel-btn:hover {
  background: rgba(255, 255, 255, 0.2);
  border-color: rgba(255, 255, 255, 0.3);
}

.vel-close-btn {
  background: rgba(239, 68, 68, 0.8);
  border-color: rgba(239, 68, 68, 0.9);
}

.vel-close-btn:hover {
  background: rgba(239, 68, 68, 0.9);
}

.vel-prev-btn,
.vel-next-btn {
  position: fixed;
  top: 50%;
  transform: translateY(-50%);
  width: 3rem;
  height: 3rem;
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(255, 255, 255, 0.2);
  border-radius: 50%;
  color: white;
  cursor: pointer;
  transition: all 0.2s ease;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 1000;
}

.vel-prev-btn {
  left: 2rem;
}

.vel-next-btn {
  right: 2rem;
}

.vel-prev-btn:hover,
.vel-next-btn:hover {
  background: rgba(0, 0, 0, 0.9);
  border-color: rgba(255, 255, 255, 0.4);
  transform: translateY(-50%) scale(1.1);
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .vel-toolbar {
    margin: 0.5rem;
    padding: 0.75rem;
  }

  .vel-prev-btn {
    left: 1rem;
  }

  .vel-next-btn {
    right: 1rem;
  }

  .vel-prev-btn,
  .vel-next-btn {
    width: 2.5rem;
    height: 2.5rem;
  }
}

/* Animation improvements */
.vel-img {
  transition: all 0.3s ease;
}

/* Focus styles for better accessibility */
.vel-btn:focus,
.vel-prev-btn:focus,
.vel-next-btn:focus {
  outline: 2px solid #f97316;
  outline-offset: 2px;
}
</style>
